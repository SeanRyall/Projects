@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>{{ $page->name }}</h2>
        <h3>Alias: {{$page->alias}}</h3>
        Description: {{$page->description}}<br/>
        Created At: {{$page->created_at}}<br>
        Modified At: {{$page->updated_at}}<br>
        <b>Assigned Articles:</b><br/>
        <ul>
            <li>
                stuff
            </li>
        </ul>


        <a href="{{ route('pages.index') }}" class="btn btn-info">Back to all pages</a><br/>

        <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-primary">Edit Page</a><br/>

        <form action="{{ route('pages.destroy', $page->id)}}" method="post">
            {{method_field('DELETE')}}
            {{csrf_field()}}
            <button style="color:white;background-color: red">Delete</button>
        </form>
    </div>

@endsection

