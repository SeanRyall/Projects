@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>{{ $article->name }}</h2>
        <h3>Title: {{$article->title}}</h3>
        Description: {{$article->description}}<br/>
        Page: {{$article->page->name}}<br/>
{{--        Area: {{$article->contentarea->name}}<br/>--}}
        Created By: {{$article->createdby->fName}} {{$article->createdby->lName}}<br/>
        Created At: {{$article->created_at}}<br/>
        Modified By: {{$article->modifiedby->fName}} {{$article->modifiedby->lName}}<br/>
        Modified At: {{$article->updated_at}}<br/>
        {{$article->html_content}}<br/><br/>


        <a href="{{ route('articles.index') }}" class="btn btn-info">Back to all articles</a><br/>

        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Edit Article</a><br/>

        <form action="{{ route('articles.destroy', $article->id)}}" method="post">
            {{method_field('DELETE')}}
            {{csrf_field()}}
            <button style="color:white;background-color: red">Delete</button>
        </form>

        @if (count($errors))
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

@endsection