<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ContentArea extends Model
{

    protected $table = 'contentareas';

    protected $guarded = array();


    public function articles()
    {
        return $this->hasMany(Article::class,'id');
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

ContentArea::creating(function($contentarea)
{
    $contentarea->created_by_id = Auth::user()->id;
    $contentarea->modified_by_id = Auth::user()->id;
});
ContentArea::updating(function($contentarea)
{
    $contentarea->modified_by_id = Auth::user()->id;
});
