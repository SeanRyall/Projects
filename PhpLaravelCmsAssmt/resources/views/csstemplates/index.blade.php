@extends('layouts.app')

@section('content')

<div class="container">
    <h1>CSS Templates</h1>

    <a href="/csstemplates/create/" class="btn btn-primary" >Create CSS Template</a><br/>

    <hr>

    @foreach ($csstemplates as $csstemplate)

        <div>
            <h2><a href="/csstemplates/{{ $csstemplate->id }}" >{{ $csstemplate->name }}</a></h2>
            Description: {{$csstemplate->description}}<br/>
            Active State: {{$csstemplate->is_active}}<br/>
            Created By: {{$csstemplate->createdby->fName}} {{$csstemplate->createdby->lName}}<br/>
            Created At: {{$csstemplate->created_at}}<br/>
            Modified By: {{$csstemplate->modifiedby->fName}} {{$csstemplate->modifiedby->lName}}<br/>
            Modified At: {{$csstemplate->updated_at}}<br/>
            {{$csstemplate->css_content}}<br/><br/>

        </div>

    @endforeach
</div>

@endsection
