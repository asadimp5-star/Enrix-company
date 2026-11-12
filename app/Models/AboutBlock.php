<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class AboutBlock extends Model
{
    use Translatable; 
    public $table='about_blocks';
    public $translatedAttributes = ['lable' , 'items'];

    public $fillable = ['about_id','type','sort_order'];

    public function about()
    {
        return $this->belongsTo(About::class);
    }
}
