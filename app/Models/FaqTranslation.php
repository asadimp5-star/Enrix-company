<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqTranslation extends Model
{
    public $table='faq_translations';
    public $timestamps = false;

    public $fillable = ['question' , 'answer'];
}
