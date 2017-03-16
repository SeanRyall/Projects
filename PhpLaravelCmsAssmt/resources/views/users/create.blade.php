@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Add a New User</h1>
    <hr>

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form class="" method="post" action="/users">
        <input type="text" class="form-control" name="fName" value="" placeholder="First Name"><br/><br/>
        <input type="text" class="form-control" name="lName" value="" placeholder="Last Name"><br/><br/>
        <input type="text" class="form-control" name="email" value="" placeholder="Email"><br/><br/>
        <input type="text" class="form-control" name="password" value="" placeholder="Password"><br/><br/>

        <p style="color: gray">Permissions: </p>
        <select class="form-control" name="roles[]" id="roles"  multiple>
            {{--<option value="" disabled selected>Select your option</option>--}}
            <option value="">unnassigned</option>
            {{--App/Page::lists('name');--}}
            @foreach(Auth::user()->roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
        <p>Hold down the Ctrl (windows) / Command (Mac) button to select multiple permissions.</p><br/><br/>

        <input type="hidden" name="created_by_id" value="{{ Auth::user()->id}}">
        <input type="hidden" name="modified_by_id" value="{{ Auth::user()->id}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" value="post">

    </form>

</div>

@stop