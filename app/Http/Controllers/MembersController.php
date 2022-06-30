<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;
use Illuminate\Support\Facades\Auth;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
        $members = Members::all();
        return view('Backend.members.index')->with('members', $members);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
        return view('Backend.members.create');
        }
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
            'name' => 'required',
            'title' => 'required',
            'body' => 'required',
            'position' => 'required',
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

       $members = new Members();

       $members->title = $request->input('title');
       $members->body = $request->input('body');
       $members->position = $request->input('position');
       $members->name = $request->input('name');
       $members->image = $fileNameToStore;
       $members->save();

       return redirect('/a_members')->with('success', 'Member  added successfully');
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
        $members = Members::find($id);

        return view('Backend.members.edit')->with('members', $members);
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
            'name' => 'required',
            'title' => 'required',
            'body' => 'required',
            'position' => 'required',
        ]);

       $members = Members::find($id);

       $members->title = $request->input('title');
       $members->name = $request->input('name');
       $members->body = $request->input('body');
       $members->position = $request->input('position');
       $members->save();

       return redirect('/a_members')->with('success', 'Member Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $members = Members::find($id);
        $members->delete();
        return redirect('/a_members')->with('success', 'members removed successfully');
    }
}
