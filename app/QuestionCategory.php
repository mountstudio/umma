<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionCategory extends Model
{
    use Sluggable;
    use SoftDeletes;

    protected $fillable = [ 'name','name_kg', 'slug'];

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
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
