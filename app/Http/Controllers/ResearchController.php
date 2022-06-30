<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Research;
use Illuminate\Support\Facades\Auth;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $research = Research::all();
        return view('Backend.research.index')->with('research', $research);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.research.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'title' => 'required',
            'body' => 'required',
            'status' => 'required',
            'members' => 'required',
            'image' => 'image|nullable|max:19999'
        ]);
        
        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('image')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('image')->storeAs('public/img', $fileNameToStore);

        }else{
            $fileNameToStore = 'noimage.jpg';
        }

       $research = new Research();

       $research->title = $request->input('title');
       $research->body = $request->input('body');
       $research->status = $request->input('status');
       $research->members = $request->input('members');
       $research->image = $fileNameToStore;
       $research->save();

       return redirect('/a_research')->with('success', 'Research  added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $research = Research::find($id);

        return view('Backend.research.edit')->with('research', $research);
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
        $this -> validate($request, [
            'title' => 'required',
            'body' => 'required',
            'status' => 'required',
            'members' => 'required',
        ]);

       $research = Research::find($id);

       $research->title = $request->input('title');
       $research->body = $request->input('body');
       $research->status = $request->input('status');
       $research->members = $request->input('members');
       $research->save();

       return redirect('/a_research')->with('success', 'Research Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $research = Research::find($id);
        $research->delete();
        return redirect('/a_research')->with('success', 'Research removed successfully');
    }
}
