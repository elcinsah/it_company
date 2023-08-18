<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\formContact;
use Illuminate\Http\Request;

class UserMailController extends Controller
{
   public function index(){
 $users = formContact::paginate(2);
       return view('admin.pages.usermail',compact('users'));

   }
   public function delete(Request $req){
       $userm=$req->idi;
     $us=formContact::findOrFail($userm)->delete();
     if ($us){

         return response()->json("silme isi ugurla oldu",200);

     }

   }

}
