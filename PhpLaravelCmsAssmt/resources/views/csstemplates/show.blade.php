@extends('layouts.app')

@section('content')

    <div class="container">

    <h2>{{ $csstemplate->name }}</h2>
    Description: {{$csstemplate->description}}<br/>
    Active State: {{$csstemplate->is_active}}<br/>
    Created At: {{$csstemplate->created_at}}<br/>
    Modified At: {{$csstemplate->updated_at}}<br/>
    {{$csstemplate->css_content}}<br/><br/>


    <a href="{{ route('csstemplates.index') }}" class="btn btn-info">Back to all templates</a><br/>

    <a href="{{ route('csstemplates.edit', $csstemplate->id) }}" class="btn btn-primary">Edit Template</a><br/>

        <form action="{{ route('csstemplates.destroy', $csstemplate->id)}}" method="post">
            {{method_field('DELETE')}}
            {{csrf_field()}}
            <button style="color:white;background-color: red">Delete</button>
        </form>
    </div>

@endsection