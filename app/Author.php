<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['full_name', 'photo'];
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
