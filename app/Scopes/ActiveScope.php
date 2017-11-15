<?php
/**
 * Created by PhpStorm.
 * User: malcolmx
 * Date: 15.11.2017
 * Time: 20:04
 */

namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ActiveScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('is_active', 1);
    }
}