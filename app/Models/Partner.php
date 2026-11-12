<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use Translatable; 
    public $table='partners';
    public $translatedAttributes = ['title' , 'desc'];

    public $fillable = ['image1']; 

    public function blocks()
    {
        return $this->hasMany(PartnerBlock::class)->orderBy('sort_order');
    }
}
