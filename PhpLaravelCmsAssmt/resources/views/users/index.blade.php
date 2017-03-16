@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Users</h1>

    <a href="/users/create/" class="btn btn-primary" >Create User</a><br/>

    <hr>

    @foreach ($users as $user)

        <div>
            <h2><a href="/users/{{ $user->id }}" >{{ $user->fName }} {{ $user->lName }}</a></h2>
            Email: {{$user->email}}<br/>
            Password: {{$user->password}}<br/>
            Created By: {{$user->createdby->fName}} {{$user->createdby->lName}}<br/>
            Created At: {{$user->created_at}}<br/>
            Modified By: {{$user->modifiedby->fName}} {{$user->modifiedby->lName}}<br/>
            Modified At: {{$user->updated_at}}<br/>
            <b>Permissions:</b><br/>
            @foreach($user->roles as $role)
            <ul>
                <li>
                {{ $role->name }}
                </li>
            </ul>
            @endforeach
        </div>

    @endforeach
</div>

@endsection
