@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Edit Content Area</h1>
        <hr>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="/contentareas/{{$contentarea->id}}">
            {{method_field('PATCH')}}
            <label>Name: </label><br/>
            <textarea name="name" rows="2" cols="40">{{ $contentarea->name }}</textarea><br/><br/>
            <label>Alias: </label><br/>
            <textarea name="alias" rows="2" cols="40">{{ $contentarea->alias }}</textarea><br/><br/>
            <label>Description: </label><br/>
            <textarea name="description" rows="2" cols="40">{{ $contentarea->description }}</textarea><br/><br/>
            <label>Display Order: </label><br/>
            <textarea name="order" rows="2" cols="40">{{ $contentarea->order }}</textarea><br/><br/>

            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <button type="submit" class="btn btn-primary">Update Content Area</button><br/>

            <a href="{{ route('contentareas.index') }}" class="btn btn-info">Back to all Content Areas</a><br/>
            {{csrf_field()}}

        </form>
    </div>


@stop()