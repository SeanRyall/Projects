<?php

namespace App\Http\Controllers;

use App\User;
use Input;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.index',compact('users', 'createdby', 'modifiedby'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('users.create');

        $users = User::with('createdby', 'modifiedby')->get();
        return view('users.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fName' => 'required',
            'lName' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //dd($request->input('roles'));


        $user = new User();
        $user->fName = $request->input('fName');
        $user->lName = $request->input('lName');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $user->save();

        $user->roles()->attach($request->input('roles'));

//        dd($user);

        //$input = $request->all();

        //User::create($input);

        //add selected roles to user


        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'fName' => 'required',
            'lName' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::findOrFail($id);

        $input = $request->all();

        $user->fill($input)->save();

        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('users');
    }
}
