<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Page extends Model
{
    protected $guarded = array();

    public function articles()
    {
        return $this->hasMany(Article::class);
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

Page::creating(function($page)
{
    $page->created_by_id = Auth::user()->id;
    $page->modified_by_id = Auth::user()->id;
});
Page::updating(function($page)
{
    $page->modified_by_id = Auth::user()->id;
});
