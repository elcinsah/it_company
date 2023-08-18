<?php

namespace App\Http\Controllers;

use App\Enums\PagesEnums;
use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\about_info;
use App\Models\team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function about(){
$about_project=about_info::all();
$about=about::where('status',PagesEnums::ABOUT_ACTIVE)->orderBy('id','DESC')->first();
$team=team::where('status',PagesEnums::TEAM_ACTIVE)->get();

       return view('pages.about',compact('about_project','about','team'));
   }
}
