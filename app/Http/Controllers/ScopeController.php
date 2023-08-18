<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\portfolio;
use Illuminate\Http\Request;

class ScopeController extends Controller
{
  public function scope(Request $req){
   $scopetext=strip_tags(trim($req->result));



   if ($scopetext !=null){

       $data = portfolio::where('mehsul_haqqinda', 'like', '%' . $scopetext . '%')->get();
      $returnarray=[];
       foreach($data as $key=> $row)
       {
           $returnarray[$key]['mehsul_haqqinda']=$row['mehsul_haqqinda'];
           $returnarray[$key]['negd_qiymet']=$row['negd_qiymet'];
           $returnarray[$key]['kredit_qiymet']=$row['kredit_qiymet'];


       }
      return json_encode($returnarray);





   }


  }
}
