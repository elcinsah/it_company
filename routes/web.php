<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ScopeController;



use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\PortfolioCategoryContoller;
use App\Http\Controllers\admin\PortfoliosController;
use App\Http\Controllers\admin\ContactEmailPhoneController;
use App\Http\Controllers\admin\AboutAdminController;
use App\Http\Controllers\admin\HomesController;
use App\Http\Controllers\admin\HomeLinkController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\SosialController;
use App\Http\Controllers\admin\UserMailController;


use App\Enums\UrlEnums;



Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('login/form',[LoginController::class,'loginForm'])->name('login.form');



Route::get('/',[HomeController::class,'home'])->name('home');
Route::post('readmore',[HomeController::class,'readmore'])->name('read.more');

Route::get('service',[ServiceController::class,'services'])->name('services');
Route::get('about',[AboutController::class,'about'])->name('about');
Route::get('portfolio',[PortfolioController::class,'portfolio'])->name('portfolio');
Route::get('contact',[ContactController::class,'contact'])->name('contact');
Route::get('team-page',[TeamsController::class,'teamPage'])->name('team.page');
Route::post('sent',[ContactController::class,'sentMail'])->name('contact.mail');
Route::get('single-kredit/{id}',[PortfolioController::class,'portfolioSingle'])->name('single');
Route::get('single/{id}',[PortfolioController::class,'portfolioSingleKredit'])->name('single.negd');
Route::get('category/{id}',[CategoryController::class,'category'])->name('category');
Route::get('scope',[ScopeController::class,'scope'])->name('search.text');

Route::middleware(['notlogin'])->group(function () {
    Route::get('logout',[LoginController::class,'logout'])->name('logout');

    Route::get('admins',[AdminController::class,'admin'])->name('admin');
//team routes
    Route::get('team',[TeamController::class,'team'])->name('team');
    Route::get('team/add',[TeamController::class,'teamAdd'])->name('team.add');
    Route::post('team/add/data',[TeamController::class,'teamAddForm'])->name('team.add.form');
    Route::get('team/update/{id}',[TeamController::class,'teamUpdate'])->name('team.update');
    Route::post('team/change/{id}',[TeamController::class,'teamUpdateForm'])->name('team.update.form');
    Route::get('team/delate/{id}',[TeamController::class,'teamDelate'])->name('team.delate');
//servives routes
    Route::get('servicesSeeder/admin',[ServicesController::class,'services'])->name('services.admin');
    Route::get('servicesSeeder/add/admin',[ServicesController::class,'servicesAdd'])->name('services.add');
    Route::post('servicesSeeder/post/form',[ServicesController::class,'servicesAddForm'])->name('services.sent');
    Route::get('servicesSeeder/update/{id}',[ServicesController::class,'servicesUpdate'])->name('services.update');
    Route::post('servicesSeeder/cange/{id}',[ServicesController::class,'servicesCange'])->name('services.change');
    Route::get('servicesSeeder/delete/{id}',[ServicesController::class,'servicesDelete'])->name('services.delete');
//portfolio category routes
    Route::get('portfolio/category',[PortfolioCategoryContoller::class,'portfolioCotegory'])->name('portfolio.category');
    Route::get('portfoliocategory/add',[PortfolioCategoryContoller::class,'portfolioCotegoryAdd'])->name('portfoliocategory.add');
    Route::post('portfoliocategory/form',[PortfolioCategoryContoller::class,'portfolioCotegoryAddForm'])->name('portfoliocategory.form');
    Route::get('portfoliocategory/update/{id}',[PortfolioCategoryContoller::class,'portfolioCotegoryUpdate'])->name('portfoliocategory.update');
    Route::post('portfoliocategory/change/{id}',[PortfolioCategoryContoller::class,'portfolioCotegoryChange'])->name('portfoliocategory.change');
    Route::get('portfoliocategory/delete/{id}',[PortfolioCategoryContoller::class,'portfolioCotegoryDelete'])->name('portfoliocategory.delete');
//portfolio routers
    Route::get('portfolios',[PortfoliosController::class,'portfolio'])->name('portfolio.admin.data');
    Route::get('portfolios/update/{id}',[PortfoliosController::class,'portfolioUpdate'])->name('portfolio.update');
    Route::get('portfolios/add',[PortfoliosController::class,'portfolioAdd'])->name('portfolio.add');
    Route::post('portfolios/add/form',[PortfoliosController::class,'portfolioAddForm'])->name('portfolio.add.form');
    Route::post('portfolios/change{id}',[PortfoliosController::class,'portfolioChange'])->name('portfolio.change');
    Route::get('portfolios/delete{id}',[PortfoliosController::class,'portfolioDelete'])->name('portfolio.delete');
//contact address routes
    Route::get(UrlEnums::CONTACT_ADDRESS,[ContactEmailPhoneController::class,'contactAddress'])->name('contact.address');
    Route::get(UrlEnums::CONTACT_ADDRESS_ADD,[ContactEmailPhoneController::class,'contactAddressAdd'])->name('contact.address.add');
    Route::post(UrlEnums::CONTACT_ADDRESS_FORM,[ContactEmailPhoneController::class,'contactAddressAddForm'])->name('contact.address.sent');
    Route::get(UrlEnums::CONTACT_ADDRESS_UPDATE,[ContactEmailPhoneController::class,'contactAddressUpdate'])->name('contact.address.update');
    Route::post(UrlEnums::CONTACT_ADDRESS_CHANGE,[ContactEmailPhoneController::class,'contactAddressChange'])->name('contact.address.change');
    Route::get(UrlEnums::CONTACT_ADDRESS_DELETE,[ContactEmailPhoneController::class,'contactAddressDelete'])->name('contact.address.delete');
    Route::get(UrlEnums::CONTACT_INFO,[ContactEmailPhoneController::class,'contactInfo'])->name('contact.info');
    Route::get(UrlEnums::CONTACT_INFO_UPDATE,[ContactEmailPhoneController::class,'contactInfoApdate'])->name('contact.info.update');
    Route::post(UrlEnums::CONTACT_INFO_CHANGE,[ContactEmailPhoneController::class,'contacInfoChange'])->name('contact.info.change');
//about pages
    Route::get(UrlEnums::ABOUT_ADMINS,[AboutAdminController::class,'about'])->name('about.about');
    Route::get(UrlEnums::ABOUT_ADMINS_ADD,[AboutAdminController::class,'aboutAdd'])->name('about.add');
    Route::post(UrlEnums::ABOUT_ADMINS_ADD_FORM,[AboutAdminController::class,'aboutAddForm'])->name('about.add.form');
    Route::get(UrlEnums::ABOUT_ADMINS_UPDATE,[AboutAdminController::class,'aboutUpdate'])->name('about.update');
    Route::post(UrlEnums::ABOUT_ADMINS_CHANGE,[AboutAdminController::class,'aboutCange'])->name('about.change');
    Route::get(UrlEnums::ABOUT_ADMINS_DELETE,[AboutAdminController::class,'delete'])->name('about.delete');
    Route::get(UrlEnums::ABOUT_ADMINS_PROJECT,[AboutAdminController::class,'AboutProject'])->name('about.project');
    Route::get(UrlEnums::ABOUT_ADMINS_PROJECT_UPDATE,[AboutAdminController::class,'AboutProjectUpdate'])->name('about.project.update');
    Route::post(UrlEnums::ABOUT_ADMINS_PROJECT_CHANGE,[AboutAdminController::class,'aboutProjectCange'])->name('about.project.change');
//home page
    Route::get(UrlEnums::HOME_ADMINS,[HomesController::class,'index'])->name('home.admin');
    Route::get(UrlEnums::HOME_ADD,[HomesController::class,'homeAdd'])->name('home.add');
    Route::post(UrlEnums::HOME_FORM_SENT,[HomesController::class,'homeAddForm'])->name('home.form.sent');
    Route::get(UrlEnums::HOME_UPDATE,[HomesController::class,'homeApdate'])->name('home.update');
    Route::post(UrlEnums::HOME_FORM_UPDATE,[HomesController::class,'homeUpdateForm'])->name('home.form.update');
    Route::get(UrlEnums::HOME_DELETE,[HomesController::class,'homeDelete'])->name('home.delete');

    //home_link pages
    Route::get(UrlEnums::HOME_LINK,[HomeLinkController::class,'index'])->name('home-link.admin');
    Route::get(UrlEnums::HOME_LINK_UPDATE,[HomeLinkController::class,'homelinkUpdate'])->name('home-link.update');
    Route::post(UrlEnums::HOME_LINK_UPDATE_FORM,[HomeLinkController::class,'homelinkUpdateForm'])->name('home-link.form.update');
//admins pages

    Route::get(UrlEnums::ADMINS_USER,[AdminUserController::class,'index'])->name('admin.users');
    Route::get(UrlEnums::ADMIN_USER_ADD,[AdminUserController::class,'adminUserAdd'])->name('admin.add.users');
    Route::post(UrlEnums::ADMIN_USER_ADD_FORM,[AdminUserController::class,'adminUserAddForm'])->name('admin-user.add.form');
    Route::get(UrlEnums::ADMIN_USER_DELETE,[AdminUserController::class,'adminUserDelete'])->name('admin-user.delete');
    Route::get(UrlEnums::ADMIN_USER_UPDATE,[AdminUserController::class,'adminUserUpdate'])->name('admin-user.update');
    Route::post(UrlEnums::ADMIN_USER_UPDATE_FORM,[AdminUserController::class,'adminUserUpdateForm'])->name('admin-user.update.form');

    //admin sosial

    Route::get(UrlEnums::SOSIAL,[SosialController::class,'index'])->name('sosial');
    Route::get(UrlEnums::SOSIAL_UPDATE,[SosialController::class,'update'])->name('sosial.update');
    Route::post(UrlEnums::SOSIAL_UPDATE_FORM,[SosialController::class,'change'])->name('sosial.update.form');
  //user mails
    Route::get(UrlEnums::USERS_MAILS,[UserMailController::class,'index'])->name('users.mails');
    Route::get(UrlEnums::USERS_MAILS_DELETE,[UserMailController::class,'delete'])->name('del.user.mail');




});



