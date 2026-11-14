<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Storie extends Model
{
    use Translatable; 
    public $table='Stories';
    public $translatedAttributes = ['title' , 'desc' ];

    public $fillable = ['status'];
}
