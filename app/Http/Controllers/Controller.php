<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

abstract class Controller
{
    protected function makeSeo($title, $description,$canonical, $keywords='',$image )
    {
        return [
            'title'=>$title,
            'description'=> Str::limit(strip_tags($description),200),
            'canonical'=> $canonical,
            'keywords'=> $keywords ?: $title,
            '$image'=>$image ??asset('favicon.ico')
        ];
    }
}
