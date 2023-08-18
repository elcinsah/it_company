<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Models\contactEmailPhone;
use App\Models\contactlocation;
use  Illuminate\Http\Request;

class ContactEmailPhoneController extends Controller
{
    public function contactAddress()
    {
        $contactaddress = contactEmailPhone::all();
        return view('admin.pages.contactaddress', compact('contactaddress'));
    }

    public function contactAddressAdd()
    {

        return view('admin.pages.contactaddressadd');
    }

    public function contactAddressAddForm(Request $req)
    {
        $email = strip_tags(trim($req->email));
        $phone = strip_tags(trim($req->phone));
        $contactaddress = new contactEmailPhone();

        $contactaddress->email = $email;
        $contactaddress->phone = $phone;
        $contactaddress->status = $req->status;
        $contactaddress->save();
        return redirect()->route('contact.address');
    }

    public function contactAddressUpdate($id)
    {

        $contactaddress = contactEmailPhone::where('id', $id)->first();
        return view('admin.pages.contactaddressupdate', compact('contactaddress'));
    }

    public function contactAddressChange(Request $req, $id)
    {
        $email = strip_tags(trim($req->email));
        $phone = strip_tags(trim($req->phone));
        $contactaddress = contactEmailPhone::where('id', $id)->first();

        $contactaddress->email = $email;
        $contactaddress->phone = $phone;
        $contactaddress->status = $req->status;
        $contactaddress->save();
        return redirect()->route('contact.address');
    }

    public function contactAddressDelete($id)
    {

        $deletcontact = contactEmailPhone::findOrFail($id)->delete();
        return redirect()->route('contact.address');

    }

    public function contactInfo()
    {
        $info = contactlocation::all();

        return view('admin.pages.contactinfo', compact('info'));
    }

    public function contactInfoApdate($id)
    {

        $info = contactlocation::where('id', $id)->first();

        return view('admin.pages.contactinfoupdate', compact('info'));

    }

    public function contacInfoChange(Request $req, $id)
    {
        $info = contactlocation::where('id', $id)->first();

        $email_title = strip_tags(trim($req->email_title));
        $phone_title = strip_tags(trim($req->phone_title));
        $address_title = strip_tags(trim($req->address_title));
        $address = strip_tags(trim($req->address));
        $address_icon = strip_tags(trim($req->address_icon));
        $email_icon = strip_tags(trim($req->email_icon));
        $phone_icon = strip_tags(trim($req->phone_icon));
        $map = strip_tags(trim($req->map));
        $info->email_title = $email_title;
        $info->phone_title = $phone_title;
        $info->address_title=$address_title;
        $info->address=$address;
        $info->address_icon=$address_icon;
        $info->email_icon=$email_icon;
        $info->phone_icon=$phone_icon;
        $info->map=$map;
        $info->save();
        return redirect()->route('contact.info');
    }



}
