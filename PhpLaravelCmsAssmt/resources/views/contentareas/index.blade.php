@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Content Areas</h1>

    <a href="/contentareas/create/" class="btn btn-primary" >Create Content Area</a><br/>

    <hr>

    @foreach ($contentareas as $contentarea)

        <div>
            <h2><a href="/contentareas/{{ $contentarea->id }}" >{{ $contentarea->name }}</a></h2>
            <h3>Alias: {{$contentarea->alias}}</h3>
            Description: {{$contentarea->description}}<br/>
            Display Order: {{$contentarea->order}}<br/>
            Created By: {{$contentarea->createdby->fName}} {{$contentarea->createdby->lName}}<br/>
            Created At: {{$contentarea->created_at}}<br/>
            Modified By: {{$contentarea->modifiedby->fName}} {{$contentarea->modifiedby->lName}}<br/>
            Modified At: {{$contentarea->updated_at}}<br/>
            <b>Articles:</b><br/>
            @foreach($contentarea->articles as $article)
                <ul><li>{{ $article->name }}</li></ul>
            @endforeach
        </div>

    @endforeach
</div>

@endsection
