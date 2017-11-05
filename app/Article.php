<?php
/**
 * Created by PhpStorm.
 * User: malcolmx
 * Date: 22.10.2017
 * Time: 21:29
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'article_categories');
    }

    public function categoryIds()
    {
        return $this->belongsToMany(Category::class, 'article_categories')->pluck('category_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}