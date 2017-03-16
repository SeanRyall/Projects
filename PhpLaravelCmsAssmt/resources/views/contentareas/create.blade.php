@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Add a New Content Area</h1>
    <hr>

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form class="" method="post" action="/contentareas">
        <input type="text" name="name" value="" placeholder="Names"><br/><br/>
        <input type="text" name="alias" value="" placeholder="Alias"><br/><br/>
        <textarea name="description" rows="2" cols="40" placeholder="Descriptions"></textarea><br/><br/>
        <input type="text" name="order" value="" placeholder="Order"><br/><br/>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" value="post" >

    </form>

</div>
@stop