<?php

namespace App\Providers;

use App\Enums\PagesEnums;
use App\Models\about;
use App\Models\contactEmailPhone;
use App\Models\contactlocation;
use App\Models\portfoliocategory;
use App\Models\sosoial;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application servicesSeeder.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application servicesSeeder.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();


        View::share('meny', portfoliocategory::all());
        View::share('aboutfooter',about::select('description')->where('status',PagesEnums::HOME_ACTIVE)->first());
        View::share('contacemailfooter',contactEmailPhone::where('status',PagesEnums::CONTACT_ACTIVE)->orderBy('id', 'DESC')->first());
        View::share('contactadrestfooter',contactlocation::select('address')->first());
        View::share('sosial',sosoial::first());

    }
}
