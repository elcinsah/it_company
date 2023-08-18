<?php

namespace App\Http\Controllers;

use App\Enums\PagesEnums;
use App\Http\Controllers\Controller;
use App\Models\portfolio;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category($id){
     $category=portfolio::with(['getProfolio'])->where('portfoliocategory_id',$id)
         ->where('status',PagesEnums::PORTFOLIO_ACTIVE)->paginate(3);
     //dd($category);
        return view('pages.category',compact('category'));
    }

}
