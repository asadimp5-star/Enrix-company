<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    public $table='post_translations';
    public $timestamps = false;

    public $fillable = ['title' , 'keywords' , 'summery' , 'describe1' , 'describe2','describe3','describe4','sourceTitle','sourceDesc','aouther'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
