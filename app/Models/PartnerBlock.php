<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class PartnerBlock extends Model
{
    use Translatable; 
    public $table='partner_blocks';
    public $translatedAttributes = ['lable' , 'items'];

    public $fillable = ['partner_id','type','sort_order'];

    public function partner()
    {
        return $this->belongsTo(partner::class);
    }
}
