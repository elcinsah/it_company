<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\about_info;
use Illuminate\Http\Request;

class AboutAdminController extends Controller
{
  public function about(){
      $about =about::all();
      return view('admin.pages.aboutadmin',compact('about'));
  }
  public function aboutAdd(){

    return view('admin.pages.adminaboutadd');
  }
  public function aboutAddForm(Request $req){
      //dd($req->all());
      $about=new about();
      $description_slider=strip_tags(trim($req->description_slider));
      $description=strip_tags(trim($req->description));
      $title=strip_tags(trim($req->title));


      $about->description_slider=$description_slider;
      $about->title=$title;
      $about->description=$description;

      $about->status=$req->status;


      if ($req->hasFile('image') and $req->image !=null) {
          fileUplode($req->image,$about);
      }
      else{
          $req->image==null;
      }
      $about->save();
      return redirect()->route('about.about');


  }
  public function aboutUpdate($id){
      $about=about::findOrFail($id);

    return view('admin.pages.aboutupdate',compact('about'));
  }

  public function aboutCange(Request $req,$id){

      $about=about::where('id',$id)->first();
      $title=strip_tags(trim($req->title));
      $description_slider=strip_tags(trim($req->description_slider));
      $des=strip_tags(trim($req->description));
      $about->title=$title;
      $about->description_slider=$description_slider;
      $about->description=$des;
      $about->status=$req->status;
      if ($req->hasFile('image') and $req->image !=null) {
          fileUplode($req->image,$about);
      }
      else{
          $req->image==null;
      }
      $about->save();
      return redirect()->route('about.about');



  }
  public function delete($id){
      $about=about::findOrFail($id)->delete();
      return redirect()->route('about.about');


  }
  public function AboutProject(){
      $about_project=about_info::all();
     return view('admin.pages.aboutproject',compact('about_project'));
  }
public function AboutProjectUpdate($id){
    $about_project=about_info::findOrFail($id);
    return view('admin.pages.aboutprojectupdate',compact('about_project'));
}
public function aboutProjectCange(Request $req,$id){
    $about_project=about_info::where('id',$id)->first();
    $title=strip_tags(trim($req->title));
    $title_count=strip_tags(trim($req->title_count));
    $about_project->title=$title;
    $about_project->title_count=$title_count;
    $about_project->save();
    return redirect()->route('about.project');
}

}
