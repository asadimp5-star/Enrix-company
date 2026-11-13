<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use Translatable; 
    public $table='homes';
    public $translatedAttributes = ['title' , 'desc'];

    public $fillable = ['image1']; 

    public function blocks()
    {
        return $this->hasMany(HomeBlock::class)->orderBy('sort_order');
    }
}
