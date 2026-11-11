<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use Translatable; 
    public $table='faqs';
    public $translatedAttributes = ['question' , 'answer' ];

    public $fillable = ['status'];

    public $guarded = ['id'];
}
