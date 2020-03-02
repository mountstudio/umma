<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Project extends Model
{
    use SoftDeletes;
    use Sluggable;
    protected $fillable = ['name', 'slug', 'image','description'];

    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'name',
            ]
        ];
    }

}
