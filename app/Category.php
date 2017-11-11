<?php
/**
 * Created by PhpStorm.
 * User: malcolmx
 * Date: 22.10.2017
 * Time: 21:30
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_categories');
    }
}