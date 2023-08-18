<?php

namespace App\Http\Controllers\admin;

use App\Enums\PagesEnums;
use App\Http\Controllers\Controller;
use App\Models\portfoliocategory;
use Illuminate\Http\Request;

class PortfolioCategoryContoller extends Controller
{
    public function portfolioCotegory(){
$portfolioCategory=portfoliocategory::where('status',PagesEnums::PORTFOLIO_CATEGORY_ACTIVE)->get();
//dd($portfolioCategory);
      return view('admin.pages.portfoliocategory',compact('portfolioCategory'));

    }

    public function portfolioCotegoryUpdate(Request $req,$id){
        $portfoliocategory =portfoliocategory::findOrFail($id)->first();
        //dd($portfoliocategory);
       return view('admin.pages.portfoliocategoryupdate',compact('portfoliocategory')) ;
    }
    public function portfolioCotegoryChange(Request $req,$id){
        $name=strip_tags(trim($req->name));
        $portfoliocategory =portfoliocategory::findOrFail($id)->first();
        $portfoliocategory->name=$name;
        $portfoliocategory->status=$req->status;

        $portfoliocategory->save();
        return redirect()->route('portfolio.category');

    }
    public function portfolioCotegoryDelete($id){

        $portfoliocategory =portfoliocategory::findOrFail($id)->delete();

        return redirect()->route('portfolio.category');

    }

    public function portfolioCotegoryAdd(){
        return view('admin.pages.portfoliocategoryadd');
    }
    public function portfolioCotegoryAddForm(Request $req){
        $portfolioCategory=new portfoliocategory() ;
        $name=strip_tags(trim($req->name));
        $portfolioCategory->name=$name;
        $portfolioCategory->status=$req->status;
        $portfolioCategory->save();
        return redirect()->route('portfolio.category');
    }

}
