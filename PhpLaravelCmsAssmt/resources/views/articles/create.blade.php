@extends('layouts.app')

<script type="text/javascript" src="{{ URL::asset('js/nicEdit.js') }}"></script>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

@section('content')

<div class="container">

    <h1>Add a New Article</h1>
    <hr>

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form class="" method="post" action="/articles">
        <input type="text" class="form-control" name="name" value="" placeholder="Name"><br/><br/>
        <input type="text" class="form-control" name="title" value="" placeholder="Title"><br/><br/>
        <input type="text" class="form-control" name="description" size="100" placeholder="Description"><br/><br/>
        <textarea name="html_content">HTML Content</textarea><br/><br/>

        <p style="color: gray">All Pages: </p>
        <select class="form-control" id="sel1" name="all_pages">
            <option value="no">No</option>
            <option value="yes">Yes</option>
        </select><br/><br/>

        <p style="color: gray">Pages: </p>
        <select class="form-control" id="sel1" name="page_id">
            {{--<option value="" disabled selected>Select your option</option>--}}
            <option value="">unnassigned</option>
            {{--App/Page::lists('name');--}}
            @foreach($pages as $page)
            <option value="{{$page->id}}">{{$page->name}}</option>
                @endforeach
        </select><br/><br/>

        <p style="color: gray">Content Area: </p>
        <select class="form-control" id="sel2" name="contentarea_id">
            {{--<option value="" disabled selected>Select your option</option>--}}
            <option value="">unnassigned</option>
            @foreach($contentareas as $contentarea)
                <option value="{{$contentarea->id}}">{{$contentarea->name}}</option>
            @endforeach
        </select><br/><br/>

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <input type="submit" class="btn btn-primary" value="Add Article" >

    </form>
</div>


@stop