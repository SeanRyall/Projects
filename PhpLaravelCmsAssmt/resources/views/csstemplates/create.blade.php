@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Add a New Template</h1>
    <hr>

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form class="" method="post" action="/csstemplates">
        <input type="text" name="name" value="" placeholder="Name"><br/><br/>
        <textarea name="description" rows="2" cols="40" placeholder="Description"></textarea><br/><br/>
        <p style="color: gray">Acitve: </p>
        <select name="is_active">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select><br/><br/>
        <textarea name="css_content" rows="2" cols="40" placeholder="Content"></textarea><br/><br/>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" value="post" >

    </form>

</div>

@stop