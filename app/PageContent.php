<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PageContent extends Model
{
    use HasTranslations;

    public $translatable = ['title', 'body'];

    //
    public function scopeActive($query){
        return $query->where('active', true);
    }
}
