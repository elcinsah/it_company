<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\home;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function index(){
        $homes=home::all();
      return view('admin.pages.homeadmin',compact('homes'));

    }
    public function homeAdd(){

    return view('admin.pages.homeadd');
    }
    public function homeAddForm(Request $req){
$title=strip_tags(trim($req->title));
$description=strip_tags(trim($req->description));
$home=new home();
$home->title=$title;
$home->description=$description;
$home->status=$req->status;
$home->save();
return redirect()->route('home.admin');


    }
    public function homeApdate($id){
        $home=home::findOrFail($id);

return view('admin.pages.homeupdate',compact('home'));


    }
    public function homeUpdateForm(Request $req,$id){
        $home=home::findOrFail($id);
        $title=strip_tags(trim($req->title));
        $description=strip_tags(trim($req->description));

        $home->title=$title;
        $home->description=$description;
        $home->status=$req->status;
        $home->save();
        return redirect()->route('home.admin');


    }
    public function homeDelete($id){
        $home=home::findOrFail($id)->delete();
        return redirect()->route('home.admin');

    }
}
