<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    public function articles()
    {
        return $this->belongsToMany(Photographer::class);
    }
}
