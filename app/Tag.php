<?php
/**
 * Created by PhpStorm.
 * User: malcolmx
 * Date: 15.11.2017
 * Time: 19:23
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_tags');
    }
}