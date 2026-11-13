<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use Translatable; 
    public $table='Customers';
    public $translatedAttributes = ['title' , 'desc' ];

    public $fillable = ['image1','status'];
}
