<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class HomeBlock extends Model
{
    use Translatable; 
    public $table='home_blocks';
    public $translatedAttributes = ['lable' , 'items'];

    public $fillable = ['home_id','type','sort_order'];

    public function home()
    {
        return $this->belongsTo(Home::class);
    }
}
