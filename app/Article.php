<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Article extends Model implements Searchable
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

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('show.article', $this);

        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->name,
            $url
        );
    }
    public static function getProductionViews($id)
    {
        if (Session::has('articlesViewed')) {
            if (in_array($id, Session::get('articlesViewed'))) {
                return true;
            } else {
                $articles = Arr::prepend(Session::get('articlesViewed'), $id);
                Session::put('articlesViewed', $articles);
                return false;
            }
        }
        Session::put('articlesViewed', [$id]);
        return false;
    }
}
