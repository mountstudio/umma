<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function category()
    {
        return $this->morphMany(Category::class, 'categoriable');
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
