<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\team;
use Illuminate\Http\Request;
use Tests\Laravel\App;




class TeamController extends Controller
{
  public function team(){
      $teams=team::all();
      //dd($teams);
      return view('admin.pages.team',compact('teams'));
  }
  public function teamUpdateForm(Request $req,$id){
    $team=team::where('id',$id)->first();
      $name=strip_tags(trim($req->name));
      $job=strip_tags(trim($req->job));
      $des=strip_tags(trim($req->description));
      $team->name=$name;
      $team->job=$job;
      $team->description=$des;
      if ($req->hasFile('image') and $req->image !=null) {
          fileUplode($req->image,$team);
      }
      else{
          $req->image==null;
      }
      $team->save();
      return redirect()->route('team');


  }
  public function teamDelate($id){

      $team=team::where('id',$id)->delete();
      return redirect()->route('team');

  }

  public function teamUpdate($id){

      $team=team::where('id',$id)->first();

      //dd($team);
      return view('admin.pages.teamupdate',compact("team"));

  }


    public function teamAdd(){
        return view('admin.pages.teamadd');
    }
    public function teamAddForm(Request $req){

      $team=new team();
   $name=strip_tags(trim($req->name));
   $job=strip_tags(trim($req->job));
   $des=strip_tags(trim($req->description));
   $team->name=$name;
   $team->job=$job;
   $team->description=$des;
        if ($req->hasFile('image') and $req->image !=null) {
            fileUplode($req->image,$team);
        }
        else{
            $req->image==null;
        }
        $team->save();
        return redirect()->route('team');


    }
}
