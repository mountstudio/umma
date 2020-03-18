<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Poster extends Model
{
    use Sluggable;
    use SoftDeletes;
    protected $fillable = ['name', 'slug', 'main_photo', 'content', 'phone', 'mail', 'type_id'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ]
        ];
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function type()
    {
        return $this->belongsTo(PosterType::class,'type_id');
    }
}
