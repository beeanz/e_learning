<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasTranslations;

    public $translatable = ['title'];

    //
    public function scopeActive($query){
        return $query->where('active', true);
    }

    public function content(){
        return $this->hasMany(PageContent::class,'page_id','id')->Active();
    }
}
