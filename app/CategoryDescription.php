<?php

namespace Orange;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class CategoryDescription extends Model
{
    use Sluggable;

    public function descriptions(){
        return $this->hasMany(Category::class);
    }

    public function sluggable()
    {
        return [
            'alias' => [
                'source' => 'title'
            ]
        ];
    }
}
