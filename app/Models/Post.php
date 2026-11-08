<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Translatable; 
    public $table='posts';
    public $translatedAttributes = ['title' , 'keywords' , 'summery' , 'describe1' , 'describe2','describe3','describe4','sourceTitle','sourceDesc','aouther'];

    public $fillable = ['slug','status','image1','image2','image3','profImg'];

     
    public function resolveRouteBinding($value, $field = null)
    {
        return $this->whereTranslation('slug',$value)->firstOrFail();
    }

}
