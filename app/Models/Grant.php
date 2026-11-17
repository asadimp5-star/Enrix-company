<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Grant extends Model
{
    use Translatable; 
    public $table='grants';
    public $translatedAttributes = ['title' , 'desc' ];

    public $fillable = ['status'];
}
