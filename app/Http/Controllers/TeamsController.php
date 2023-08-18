<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\team;
use Illuminate\Http\Request;
use App\Enums\PagesEnums;

class TeamsController extends Controller
{
   public function teamPage(){

$team=team::where('status',PagesEnums::TEAM_ACTIVE)->get();

       return view('pages.team',compact('team'));
   }
}
