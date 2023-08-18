<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
  public function index(){
     $admin_user=User::all();
     return view('admin.pages.adminuser',compact('admin_user'));

  }
  public function adminUserAddForm(Request $req){
      $admin_user= new User();
      $name=strip_tags(trim($req->name));
      $email=strip_tags(trim($req->email));
      $password=strip_tags(trim($req->password));
      $admin_user->name=$name;
      $admin_user->password=bcrypt($password) ;
      $admin_user->email=$email;
      $admin_user->save();
      return redirect()->route('admin.users');

  }
  public function adminUserAdd(){
      return view('admin.pages.adminuseradd');
  }
  public function adminUserDelete($id){
      if ($id !=1){
          $admin_user=User::findOrFail($id)->delete();
          return redirect()->route('admin.users');
      }
      return redirect()->route('admin.users');

  }
  public function adminUserUpdate($id){
      $admin_user=User::findOrFail($id);
      return view('admin.pages.adminuserupdate',compact('admin_user'));
  }
    public function adminUserUpdateForm(Request $req, $id){
        $admin_user=User::findOrFail($id);
        $name=strip_tags(trim($req->name));
        $email=strip_tags(trim($req->email));
        $password=strip_tags(trim($req->password));
        $admin_user->name=$name;
        $admin_user->password= bcrypt($password);
        $admin_user->email=$email;
        $admin_user->save();
        return redirect()->route('admin.users');

    }
    public function scope(){
      dd("emfmee");
    }
}
