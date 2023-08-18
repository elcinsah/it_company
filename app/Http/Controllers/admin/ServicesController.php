<?php

namespace App\Http\Controllers\admin;

use App\Enums\PagesEnums;
use App\Http\Controllers\Controller;
use App\Models\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services(){
$servic=services::where('status',PagesEnums::SERVICES_ACTIVE)->get();
//dd($servic);
        return view('admin.pages.services',compact('servic'));
    }
    public function servicesAdd(){
        return view('admin.pages.servicesadd');
    }

    public function servicesAddForm(Request $req){

      $services = new services();
      $title=strip_tags(trim($req->title));
      $des=strip_tags(trim($req->description));
      $icon=strip_tags(trim($req->icon));

        $services->title=$title;
      $services->description=$des;
      $services->status=$req->status;
      $services->div_color=$req->div_color;
      $services->icon=$icon;
      $services->save();
      return redirect()->route('servicesSeeder.admin');

    }
    public function servicesUpdate($id){
     $services=services::findOrFail($id);
     //dd($servicesSeeder);
        return view('admin.pages.servicesupdate',compact('services'));
    }
    public function servicesCange(Request $req,$id){
        $services=services::where('id',$id)->first();
        //dd($servicesSeeder);
        $title=strip_tags(trim($req->title));
        $des=strip_tags(trim($req->description));
        $icon=strip_tags(trim($req->icon));

        $services->title=$title;
        $services->description=$des;
        $services->status=$req->status;
        $services->div_color=$req->div_color;
        $services->icon=$icon;
        $services->save();
        return redirect()->route('servicesSeeder.admin');

    }
    public function servicesDelete($id){
       services::findOrFail($id)->delete();
       return redirect()->route('servicesSeeder.admin');
    }
}
