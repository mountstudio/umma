<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    protected $fillable =
        [
            'content',
            'full_name',
            'phone',
            'mail',
            'article_id',
            'user_id',
            'parent_id'
        ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
