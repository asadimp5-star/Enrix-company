<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StorieTranslation extends Model
{
    public $table='Storie_translations';
    public $timestamps = false;

    public $fillable = ['title' , 'desc'];
}
