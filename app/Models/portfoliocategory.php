<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfoliocategory extends Model
{
    use HasFactory;


    public function getCategory(){
        return $this->hasOne(portfolio::class,'portfoliocategory_id','id');

    }


}
