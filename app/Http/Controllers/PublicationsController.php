<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publications;
use Illuminate\Support\Facades\Auth;

class PublicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publications::all();
        return view('Backend.publications.index')->with('publications', $publications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.publications.create');
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
            'author' => 'required',
            'link' => 'required',
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

     
       $publications = new Publications();

       $publications->title = $request->input('title');
       $publications->author = $request->input('author');
       $publications->link = $request->input('abstract');
       $publications->abstract = $request->input('link');
       $publications->file = $request->input('abstract');
       $publications->image = $fileNameToStore;
       $publications->save();

       return redirect('/a_publications')->with('success', 'publications  added successfully');
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
        $publications = Publications::find($id);

        return view('Backend.publications.edit')->with('publications', $publications);
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
            'author' => 'required',
            'link' => 'required',
        ]);

       $publications = Publications::find($id);

       $publications->title = $request->input('title');
       $publications->author = $request->input('author');
       $publications->link = $request->input('link');
       $publications->save();

       return redirect('/a_publications')->with('success', 'Publications Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publications = Publications::find($id);
        $publications->delete();
        return redirect('/a_publications')->with('success', 'publications removed successfully');
    }
}
