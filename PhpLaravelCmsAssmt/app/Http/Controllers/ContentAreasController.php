<?php

namespace App\Http\Controllers;

use App\ContentArea;
use Illuminate\Http\Request;

use App\Http\Requests;

class ContentAreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contentareas = ContentArea::with('createdby', 'modifiedby', 'articles')->get();

        return view('contentareas.index',compact('contentareas','createdby', 'modifiedby', 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contentareas.create');
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
            'name' => 'required',
            'alias' => 'required|alpha_num',
            'order'=> 'required'
        ]);


        $input = $request->all();

        ContentArea::create($input);

        return redirect('contentareas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contentarea = ContentArea::find($id);
        return view('contentareas.show', compact('contentarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contentarea = ContentArea::find($id);
        return view('contentareas.edit', compact('contentarea'));
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
            'name' => 'required',
            'alias' => 'required|alpha_num',
            'order'=> 'required'
        ]);

        $contentarea = ContentArea::findOrFail($id);

        $input = $request->all();

        $contentarea->fill($input)->save();

        return redirect('contentareas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ContentArea::find($id)->delete();
        return redirect('contentareas');
    }
}
