<?php

namespace App\Http\Controllers;

use App\ContentArea;
use App\Page;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\Article;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with('page', 'contentarea', 'createdby', "modifiedby")->get();

//        $pageName = Page::first()->name;
        return view('articles.index',compact('articles','page', 'contentarea', 'createdby', "modifiedby"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $articles = Article::with('page', 'contentarea', 'createdby', "modifiedby")->get();
        $pages = Page::all();
        $contentareas = ContentArea::all();
        return view('articles.create',compact('articles', 'pages', 'contentareas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request, ['name'=>'required']);

        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'html_content' => 'required',
            'all_pages' => 'required',
            'page_id' => 'required',
            'contentarea_id' => 'required',
        ]);

        $input = $request->all();

        Article::create($input);

        return redirect('articles');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
//        return view('articles.show', compact('article'));

        $articles = Article::with('page', 'contentarea', 'createdby', "modifiedby")->get();
        return view('articles.show',compact('articles','article','page', 'contentarea', 'createdby', "modifiedby"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $article = Article::find($id);
//        return view('articles.edit', compact('article'));

        $article = Article::find($id);
        $page = Page::find($id);
        $contentarea = ContentArea::find($id);
        $pages = Page::all();
        $contentareas = ContentArea::all();
        return view('articles.edit',compact('article', 'page', 'contentarea', 'pages', 'contentareas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'html_content' => 'required',
            'all_pages' => 'required',
            'page_id' => 'required',
            'contentarea_id' => 'required',
        ]);

        $article = Article::findOrFail($id);

        $input = $request->all();

        $article->fill($input)->save();

        return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect('articles');
    }

}
