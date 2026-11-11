<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use Translatable; 
    public $table='abouts';
    public $translatedAttributes = ['title' , 'desc'];

    public $fillable = ['image1']; 

    public function blocks()
    {
        return $this->hasMany(AboutBlock::class)->orderBy('sort_order');
    }
}
