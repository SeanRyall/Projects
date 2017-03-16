@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>{{ $user->fName }} {{ $user->lName }}</h2>
        Email: {{$user->email}}<br/>
        Password: {{$user->password}}<br/>
        Created At: {{$user->created_at}}<br>
        Modified At: {{$user->updated_at}}<br>
        <b>Permissions:</b><br/>
        <ul>
            <li>
                stuff
            </li>
        </ul>


        <a href="{{ route('users.index') }}" class="btn btn-info">Back to all users</a><br/>

        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit User</a><br/>

        <form action="{{ route('users.destroy', $user->id)}}" method="post">
            {{method_field('DELETE')}}
            {{csrf_field()}}
            <button style="color:white;background-color: red">Delete</button>
        </form>
    </div>

@endsection

