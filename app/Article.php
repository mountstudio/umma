<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class Article extends Model implements Feedable
{
    use SoftDeletes;
    use Sluggable;

    protected $fillable = [
        'name',
        'desc',
        'slug',
        'banner',
        'og_image',
        'category_id',
        'logo',
        'is_active',
        'view_main',
        'content',
        'lang',
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


    public static function getArticleViews($id)
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

    public function toFeedItem()
    {
        return FeedItem::create([
            'id' => $this->slug,
            'title' => $this->name,
            'summary' => $this->content,
            'updated' => $this->updated_at,
            'category' => $this->category->name,
            'link' => route('show.article', $this),
            'author' => $this->authors->implode('full_name', ', '),
        ]);
    }

    public static function getFeedItems()
    {
        return Article::all();
    }
}
