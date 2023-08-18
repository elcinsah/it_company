<?php

namespace App\Http\Controllers;

use App\Enums\PagesEnums;
use App\Http\Controllers\Controller;
use App\Models\services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
 public function services(){

     $services=services::where('status',PagesEnums::SERVICES_ACTIVE)->get();
     //dd($services);
     return view('pages.services',compact('services'));
 }
}
