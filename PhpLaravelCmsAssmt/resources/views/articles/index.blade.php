@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Articles</h1>

    <a href="/articles/create/" class="btn btn-primary" >Create Article</a><br/>

    <hr>

    @foreach ($articles as $article)

        <div>
            <h2><a href="/articles/{{ $article->id }}" >{{ $article->name }}</a></h2>
            <h3>Title: {{$article->title}}</h3>
            Description: {{$article->description}}<br/>
            All Pages: {{$article->all_pages}}<br/>
{{--            Page: {{$article->page_id}}<br/>--}}
            {{--Area: {{$article->contentarea_id}}<br/>--}}
            Page: {{$article->page->name}}<br/>
            Area: {{$article->contentarea->name}}<br/>
            Created By: {{$article->createdby->fName}} {{$article->createdby->lName}}<br/>
            Created At: {{$article->created_at}}<br/>
            Modified By: {{$article->modifiedby->fName}} {{$article->modifiedby->lName}}<br/>
            Modified At: {{$article->updated_at}}<br/>
            {{$article->html_content}}<br/><br/>
        </div>

    @endforeach
</div>

@endsection