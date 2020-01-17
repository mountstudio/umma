<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function questionCategory()
    {
        return $this->belongsTo(QuestionCategory::class);
    }
}
