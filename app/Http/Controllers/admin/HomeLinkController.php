<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\homelink;
use Illuminate\Http\Request;

class HomeLinkController extends Controller
{
    public function index(){
$home_link=homelink::all();
return view('admin.pages.homelink',compact('home_link'));

    }
    public function homelinkUpdate($id){
        $home_link=homelink::findOrFail($id);

        return view('admin.pages.homelinkupdate',compact('home_link'));

    }
    public function homelinkUpdateForm(Request $req ,$id){
        /*
         "gift" => "Hediyelermiz"
    "gift_description" => "bizden 4 kamera alna 100 m kabel hediye bu teklif hem kredit hem negd ucun kecerlidir"
    "cashback" => "2% cashback"
    "link_home" => "https://www.youtube.com/watch?v=QloMdg2bapw&ab_channel=MagicMusicMix"
    "cashback_description"
         */
        $gift=strip_tags(trim($req->gift));
        $gift_description=strip_tags(trim($req->gift_description));
        $cashback=strip_tags(trim($req->cashback));
        $link_home=strip_tags(trim($req->link_home));
        $cashback_description=strip_tags(trim($req->cashback_description));
        $home_link=homelink::findOrFail($id);
     $home_link->gift=$gift;
     $home_link->gift_description=$gift_description;
     $home_link->cashback=$cashback;
     $home_link->link_home=$link_home;
     $home_link->cashback_description=$cashback_description;
     $home_link->save();
     return redirect()->route('home-link.admin');


    }
}
