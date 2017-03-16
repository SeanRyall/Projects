<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Page;


class SiteController extends Controller
{

    public function __construct()
    {
        $this->middleware('throttle');
    }

    public function index()
    {
        return view('site.index');
    }

    public function welcome()
    {
        $pages = Page::all();

        return view('site.welcome',compact('pages'));
    }



}

