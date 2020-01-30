<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionCategory extends Model
{
    public function questions()
    {
        return $this->hasMany(Category::class, 'category_id');
    }
}
