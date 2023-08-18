<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\sosoial;
use Illuminate\Http\Request;

class SosialController extends Controller
{

    public function index()
    {
        $sosial = sosoial::all();

        return view('admin.pages.sosial', compact('sosial'));

    }
    public function update($id){

        $sosial = sosoial::findOrFail($id)->first();
        return view('admin.pages.sosialupdate',compact('sosial'));

    }
    public function change(Request $req,$id){
        $sosial = sosoial::findOrFail($id)->first();
        $facebook=strip_tags(trim($req->facebook));
        $instagram=strip_tags(trim($req->instagram));
        $linkedin=strip_tags(trim($req->linkedin));

        $sosial->facebook=$facebook;
        $sosial->linkedin=$linkedin;
        $sosial->instagram=$instagram;
        $sosial->save();
        return redirect()->route('sosial');


    }



}
