<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use Translatable; 
    public $table='Services';
    public $translatedAttributes = ['title' , 'desc'];

    public $guarded = ['id']; 

    public function blocks()
    {
        return $this->hasMany(ServiceBlock::class)->orderBy('sort_order');
    }
}
