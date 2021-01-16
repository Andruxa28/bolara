<?php

namespace Orange;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable;

    protected $fillable = ['title_ru', 'title_uk','meta_title_ru','meta_title_uk','meta_description_ru','meta_description_uk', 'status'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function sluggable()
    {
        return [
            'alias' => [
                'source' => 'title_ru'
            ]
        ];
    }
}
