<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Author extends Model
{
    use SoftDeletes;
    use Sluggable;

    protected $fillable = ['full_name', 'photo'];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'full_name',
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
