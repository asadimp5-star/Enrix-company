<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrantTranslation extends Model
{
    public $table='grant_Translations';
    public $timestamps = false;

    public $fillable = ['title' , 'desc'];
}
