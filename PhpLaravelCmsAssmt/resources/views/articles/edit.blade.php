@extends('layouts.app')

<script type="text/javascript" src="{{ URL::asset('js/nicEdit.js') }}"></script>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

@section('content')

    <div class="container">
    <h1>Edit Article</h1>
    <hr>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif


        <form method="POST" action="/articles/{{$article->id}}">
            {{method_field('PATCH')}}
            <label>Name: </label><br/>
            <input type="text" class="form-control" name="name" value="{{ $article->name }}"><br/><br/>
            <label>Title: </label><br/>
            <input type="text" class="form-control" name="title" value="{{ $article->title }}"><br/><br/>
            <label>Description: </label><br/>
            <input type="text" class="form-control" name="description" size="100" value="{{ $article->description }}"><br/><br/>
            <label>HTML Content: </label><br/>
            <textarea name="html_content" ><?=$article->html_content?></textarea><br/><br/>
            <label>All Pages: </label><br/>
            <select class="form-control" id="sel1" name="all_pages" value="{{ $article->all_pages }}">
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select><br/><br/>

            <label>Pages: </label><br/>
            <select class="form-control" id="sel1" name="page_id" value="{{ $page->name }}">
                <option>{{ $page->id }}</option>
                @foreach($pages as $page)
                    <option value="{{$page->id}}">{{$page->name}}</option>
                @endforeach
            </select><br/><br/>

            <label>Content Area: </label><br/>
            <select class="form-control" id="sel2" name="contentarea_id">
                <option>{{ $contentarea->id }}</option>
                @foreach($contentareas as $contentarea)
                    <option value="{{$contentarea->id}}">{{$contentarea->name}}</option>
                @endforeach
            </select><br/><br/>

            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <button type="submit" class="btn btn-primary">Update Article</button><br/>

            <a href="{{ route('articles.index') }}" class="btn btn-info">Back to all Articles</a><br/>
            {{csrf_field()}}

        </form>

    </div>


@stop()