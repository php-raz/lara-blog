<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = "pages";
    protected $fillable =
        ['title', 'content', 'preview', 'meta_description', 'meta_keywords', 'public'];
}
