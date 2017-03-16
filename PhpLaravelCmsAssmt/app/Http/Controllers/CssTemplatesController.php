<?php

namespace App\Http\Controllers;

use App\CssTemplate;
use Illuminate\Http\Request;

use App\Http\Requests;

class CssTemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $csstemplates = CssTemplate::with('createdby', 'modifiedby')->get();

        return view('csstemplates.index',compact('csstemplates','createdby', 'modifiedby'));


//        $csstemplates = CssTemplate::all();
//
//        return View::make('csstemplates.index')
//            ->with('csstemplates', $csstemplates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('csstemplates.create');
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
            'css_content' => 'required',

        ]);


        $input = $request->all();

        CssTemplate::create($input);

        return redirect('csstemplates');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $csstemplate = CssTemplate::find($id);
        return view('csstemplates.show', compact('csstemplate'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $csstemplate = CssTemplate::find($id);
        return view('csstemplates.edit', compact('csstemplate'));
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
            'css_content' => 'required',

        ]);

        $csstemplate = CssTemplate::findOrFail($id);

//        $this->validate($request, [
//            'title' => 'required',
//            'description' => 'required'
//        ]);

        $input = $request->all();

        $csstemplate->fill($input)->save();


        return redirect('csstemplates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        CssTemplate::find($id)->delete();
//        return redirect()->route('csstemplates.index')->with('success','Task removed successfully');

        CssTemplate::find($id)->delete();
        return redirect('csstemplates');
    }
}
