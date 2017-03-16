<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CssTemplate extends Model
{
    protected $guarded = array();

    public function createdby()
    {
        return $this->belongsTo(User::class,'created_by_id');
    }

    public function modifiedby()
    {
        return $this->belongsTo(User::class,'modified_by_id');
    }
}

CssTemplate::creating(function($csstemplate)
{
    $csstemplate->created_by_id = Auth::user()->id;
    $csstemplate->modified_by_id = Auth::user()->id;
});
CssTemplate::updating(function($csstemplate)
{
    $csstemplate->modified_by_id = Auth::user()->id;
});
