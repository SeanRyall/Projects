@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Add a New Page</h1>
    <hr>

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form class="" method="post" action="/pages">
        <input type="text" class="form-control" name="name" value="" placeholder="Name"><br/><br/>
        <input type="text" class="form-control" name="alias" value="" placeholder="Alias"><br/><br/>
        <textarea name="description" class="form-control" rows="2" cols="40" placeholder="Description"></textarea><br/><br/>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" value="post" >

    </form>
</div>

@stop
