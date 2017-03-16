@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>{{$contentarea->name}}</h2>
        <h3>Alias: {{$contentarea->alias}}</h3>
        Description: {{$contentarea->description}}<br/>
        Display Order: {{$contentarea->order}}<br/>
        Created At: {{$contentarea->created_at}}<br>
        Modified At: {{$contentarea->updated_at}}<br>
        <b>Articles:</b><br/>
        <ul>
            <li>
                stuff
            </li>
        </ul>
        Created At: {{$contentarea->created_at}}<br/>
        Modified At: {{$contentarea->updated_at}}<br/><br/>


        <a href="{{ route('contentareas.index') }}" class="btn btn-info">Back to all content areas</a><br/>

        <a href="{{ route('contentareas.edit', $contentarea->id) }}" class="btn btn-primary">Edit Content Area</a><br/>

        <form action="{{ route('contentareas.destroy', $contentarea->id)}}" method="post">
            {{method_field('DELETE')}}
            {{csrf_field()}}
            <button style="color:white;background-color: red">Delete</button>
        </form>
    </div>

@endsection