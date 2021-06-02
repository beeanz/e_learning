<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class KnowAbout extends Model
{
    use HasTranslations;

    public $translatable = ['title', 'desc'];
    //
}
