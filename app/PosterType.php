<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class PosterType extends Model
{
    use Sluggable;
    use SoftDeletes;

    protected $fillable = ['name', 'slug'];
    public function posters()
    {
        return $this->hasMany(Poster::class, 'type_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ]
        ];
    }
}
