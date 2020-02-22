<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class hadith extends Model
{
    use SoftDeletes;
    use Sluggable;
    protected $fillable = ['name', 'slug', 'content'];

    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'name',
            ]
        ];
    }
}