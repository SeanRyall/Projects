@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Pages</h1>

    <a href="/pages/create/" class="btn btn-primary" >Create Page</a><br/>

    <hr>

    @foreach ($pages as $page)

        <div>
            <h2><a href="/pages/{{ $page->id }}" >{{ $page->name }}</a></h2>
            <h3>Alias: {{$page->alias}}</h3>
            Description: {{$page->description}}<br/>
            Created By: {{$page->createdby->fName}} {{$page->createdby->lName}}<br/>
            Created At: {{$page->created_at}}<br/>
            Modified By: {{$page->modifiedby->fName}} {{$page->modifiedby->lName}}<br/>
            Modified At: {{$page->updated_at}}<br/>
            <b>Articles:</b><br/>
            @foreach($page->articles as $article)
                <ul><li>{{ $article->name }}</li></ul>
            @endforeach
        </div>

    @endforeach
</div>

@endsection
