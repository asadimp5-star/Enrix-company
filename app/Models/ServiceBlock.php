<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class ServiceBlock extends Model
{
    use Translatable; 
    public $table='service_blocks';
    public $translatedAttributes = ['lable' , 'items'];

    public $fillable = ['service_id','type','sort_order'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
