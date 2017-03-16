@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Edit User</h1>
        {{--<p class="lead">Edit this article below. <a href="{{ route('articles.index') }}">Go back to all articles.</a></p>--}}
        <hr>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="/users/{{$user->id}}">
            {{method_field('PATCH')}}
            <label>First Name: </label><br/>
            <input type="text" class="form-control" name="fName" value="{{ $user->fName }}"><br/><br/>
            <label>Last Name: </label><br/>
            <input type="text" class="form-control" name="lName" value="{{ $user->lName }}"><br/><br/>
            <label>Email: </label><br/>
            <input type="text" class="form-control" name="email" value="{{ $user->email }}"><br/><br/>
            <label>Password: </label><br/>
            <input type="text" class="form-control" name="password" value="{{ $user->password }}"><br/><br/>

            <p style="color: gray">Permissions: </p>
            <select class="form-control" id="sel1"  multiple>
                {{--<option value="" disabled selected>Select your option</option>--}}
                <option value=""></option>
                {{--App/Page::lists('name');--}}
                @foreach(Auth::user()->roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
                <p>Hold down the Ctrl (windows) / Command (Mac) button to select multiple permissions.</p>
            </select><br/><br/>

            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <button type="submit" class="btn btn-primary">Update User</button><br/>

            <a href="{{ route('users.index') }}" class="btn btn-info">Back to all Users</a><br/>
            {{csrf_field()}}

        </form>
    </div>


@stop()
