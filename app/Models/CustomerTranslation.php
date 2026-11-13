<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerTranslation extends Model
{
    public $table='Customer_translations';
    public $timestamps = false;

    public $fillable = ['title' , 'desc'];
}
