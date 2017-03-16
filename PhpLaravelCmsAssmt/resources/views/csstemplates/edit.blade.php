@extends('layouts.app')

@section('content')

    <div class="container">
    <h1>Edit Template</h1>
    <hr>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="/csstemplates/{{$csstemplate->id}}">
        {{method_field('PATCH')}}
        <label>Name: </label><br/>
        <textarea name="name" rows="2" cols="40">{{ $csstemplate->name }}</textarea><br/><br/>
        <label>Description: </label><br/>
        <textarea name="description" rows="2" cols="40">{{ $csstemplate->description }}</textarea><br/><br/>
        <label>Active: </label><br/>
        <select name="is_active">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select><br/><br/>
        <label>CSS Content: </label><br/>
        <textarea name="css_content" rows="2" cols="40">{{ $csstemplate->css_content }}</textarea><br/><br/>

        <input type="hidden" name="_token" value="{{csrf_token()}}">

            <button type="submit" class="btn btn-primary">Update Template</button><br/>

            <a href="{{ route('csstemplates.index') }}" class="btn btn-info">Back to all templates</a><br/>
            {{csrf_field()}}

    </form>
    </div>

@stop()