<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    use Sluggable;

    protected $fillable = [
            'name',
            'slug',
            'category_id',
            'logo',
            'is_active',
            'view_main',
            'content',
            'type'
        ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function photographers()
    {
        return $this->belongsToMany(Photographer::class);
    }
}
