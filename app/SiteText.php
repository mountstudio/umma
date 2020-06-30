<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteText extends Model
{
    protected $table = 'site_texts';
    public $timestamps = false;
    protected $fillable = ['desc', 'text', 'kg_text'];
}
