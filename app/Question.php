<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Question extends Model
{
    use SoftDeletes;
    use Sluggable;

    protected $fillable = ['name', 'slug', 'content', 'category_id', 'phone', 'full_name'];

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
    public function category()
    {
        return $this->belongsTo(QuestionCategory::class, 'category_id');
    }
}
