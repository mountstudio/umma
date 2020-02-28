<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;

    protected $fillable = ['full_name', 'photo'];
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
