<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('fileUplode')) {
    function fileUplode($req, $tablename)
    {

        $ext = $req->extension();
        $filename = rand(1, 1000) . time() . '.' . $ext;
        $fileupload = 'storage/uploads/' . $filename;
        $req->storeAs('public/uploads', $filename);
        return $tablename->image = $fileupload;


    }
}


?>
