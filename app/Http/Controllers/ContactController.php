<?php

namespace App\Http\Controllers;

use App\Enums\PagesEnums;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\contactEmailPhone;
use App\Models\contactlocation;
use App\Models\formContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\cameraMail;


class ContactController extends Controller
{
    public function contact(){
        $email_t=contactEmailPhone::where('status',PagesEnums::CONTACT_ACTIVE)->get();
        $contact=contactlocation::first();
        //dd($contact);

        return view('pages.contact',compact('contact','email_t'));
    }

public function sentMail(ContactFormRequest $req){
   $name=strip_tags(trim(htmlspecialchars($req->name))) ;
   $email=strip_tags(trim(htmlspecialchars($req->email)));
   $subject=strip_tags(trim(htmlspecialchars($req->subject)));
   $message=strip_tags(trim(htmlspecialchars($req->message)));
   $data=[$name,$email,$subject,$message];
   $contactform= new formContact();

$contactform->name=$name;
$contactform->email=$email;
$contactform->message=$message;
$contactform->subject=$subject;
$result=$contactform->save();
if ($result==false){

    return redirect()->route('contact')->withErrors('email ve ya formu duzgun doldurmadiz');

}
else{

    return redirect('contact')->withSuccess('mesajiniz qeyde alindi tezlikle cavab verilecek');

}



//$rez= Mail::to('cameraelcin@gmail.com')->send(new cameraMail($data));



}

}
