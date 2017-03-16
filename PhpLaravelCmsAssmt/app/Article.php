<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Article extends Model
{

    protected $guarded = array();

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function contentarea()
    {
        return $this->belongsTo(ContentArea::class);
    }

    public function createdby()
    {
        return $this->belongsTo(User::class,'created_by_id');
    }

    public function modifiedby()
    {
        return $this->belongsTo(User::class,'modified_by_id');
    }



}

Article::creating(function($article)
{
    $article->created_by_id = Auth::user()->id;
    $article->modified_by_id = Auth::user()->id;
});
Article::updating(function($article)
{
    $article->modified_by_id = Auth::user()->id;
});
