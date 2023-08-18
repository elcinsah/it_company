<?php

namespace App\Http\Controllers;

use App\Enums\PagesEnums;
use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\home;
use App\Models\homelink;
use App\Models\portfolio;
use App\Models\portfoliocategory;
use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
     $ff=   about::select('description')->where('status',PagesEnums::HOME_ACTIVE)->first();


        $team=team::where('status',PagesEnums::TEAM_ACTIVE)->get();
        $home=home::where('status',PagesEnums::HOME_ACTIVE)->get();
        $cang=json_encode($home);


$homelink=homelink::where('status',PagesEnums::HOMELINK_ACTIVE)->first();
//dd($homelink);
       $portfolio=portfoliocategory::with(['getCategory'])
            ->paginate(3);
//dd($portfolio);
        return view('pages.home',compact('portfolio','team','home','homelink','cang'));

    }

    public function readmore(Request $req){

$rr=$req->idi;

      $readmore=home::select('description')->where('id',$rr)->first();
      return response()->json($readmore,200);

    }
}
