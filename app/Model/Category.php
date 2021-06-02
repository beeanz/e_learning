<?php
/*
 * @Au
 *
 *
 *
 */
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;

    public $translatable = ['name'];

    public function scopePublished($query){
        return $query->where('is_published', 1);
    }

    public function parent(){
        return $this->hasOne(Category::class,'id','parent_category_id');
    }

    public function child(){
        return $this->hasMany(Category::class,'parent_category_id','id');
    }

   public function courses(){
        return $this->hasMany(Course::class,'category_id','id')->Published();
   }

}
