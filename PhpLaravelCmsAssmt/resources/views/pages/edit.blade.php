@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Edit Page</h1>
        {{--<p class="lead">Edit this article below. <a href="{{ route('articles.index') }}">Go back to all articles.</a></p>--}}
        <hr>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="/pages/{{$page->id}}">
            {{method_field('PATCH')}}
            <label>Name: </label><br/>
            <textarea name="name" rows="2" cols="40">{{ $page->name }}</textarea><br/><br/>
            <label>Alias: </label><br/>
            <textarea name="alias" rows="2" cols="40">{{ $page->alias }}</textarea><br/><br/>
            <label>Description: </label><br/>
            <textarea name="description" rows="2" cols="40">{{ $page->description }}</textarea><br/><br/>

            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <button type="submit" class="btn btn-primary">Update Page</button><br/>

            <a href="{{ route('pages.index') }}" class="btn btn-info">Back to all Pages</a><br/>
            {{csrf_field()}}

        </form>
    </div>


@stop()
