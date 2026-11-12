<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerBlockTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['lable' , 'items'];

    protected $casts = [
        'items'=>'array'
    ];

}
