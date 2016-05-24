<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table="comments";
    protected $fillable=['author','email','content','article_id'];

    public function article()
    {
        return $this->belongsTo('App\Article','article_id','id');
    }
}
