<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    use HasFactory;

    public function getProfolio(){

        return $this->hasOne(portfoliocategory::class, 'id', 'portfoliocategory_id');
    }




}
