<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = ['name'];
    public static function boot()
    {
        parent::boot();

        self::deleting(function (Category $category){
            $category->products()->delete();
        }) ;
    }
    public function products()
    {
        return $this->hasMany('App\Product');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
