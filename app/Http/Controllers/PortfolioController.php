<?php

namespace App\Http\Controllers;

use App\Enums\PagesEnums;
use App\Http\Controllers\Controller;
use App\Models\portfolio;
use App\Models\portfoliocategory;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{

   public function portfolio(){
       $portfolio=portfolio::with(['getProfolio'])->where('status',PagesEnums::PORTFOLIO_ACTIVE)->paginate(3);
       //dd($portfolio);
       $catname=portfoliocategory::where('status',PagesEnums::PORTFOLIO_CATEGORY_ACTIVE)->get();

       return view('pages.portfolio',compact('portfolio','catname'));

   }
   public function portfolioSingle($id){

       $portfolio=portfolio::with(['getProfolio'])
           ->where('id',$id)->first();


       $port=portfolio::select('negd_qiymet','ilkin_odenis','ayliq_odenis','kredit_qiymet')->where('id',$id)->first();
       //dd($potr);

       return view('pages.single',compact('port','portfolio'));
   }
   public function portfolioSingleKredit($id){
       $portfolio=portfolio::with(['getProfolio'])
           ->where('id',$id)->first();
       return view('pages.singlenegd',compact('portfolio'));

   }
}
