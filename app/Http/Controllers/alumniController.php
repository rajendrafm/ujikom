<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumni;

class alumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumni = alumni::all();
        return view('alumni.adminindex',compact('alumni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $alumni = alumni::all();
         return view('alumni.create', compact('alumni'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumni = new alumni;
        $alumni->title = $request->a;
        $alumni->isi = $request->c;

        if($request->hasFile('d')){
            $alumnis = $request->file('d');
            $extension = $alumnis->getClientOriginalExtension();
            $filename = str_random(6). '.' . $extension;
            $destinationPath = public_path() .
                DIRECTORY_SEPARATOR . 'img';
                $alumnis->move($destinationPath, $filename);
                $alumni->cover = $filename;
        }
        $alumni->save();
        return redirect('/admin/alumni');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumni=alumni::findOrFail($id);
        return view ('alumni.show', compact('alumni'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumni= alumni::findOrFail($id);
        return view('alumni.edit', compact('alumni'));
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
         $alumni =  alumni::findOrFail($id);
        $alumni->title = $request->a;
        $alumni->isi = $request->c;

        if($request->hasFile('d')){
            $alumnis = $request->file('d');
            $extension = $alumnis->getClientOriginalExtension();
            $filename = str_random(6). '.' . $extension;
            $destinationPath = public_path() .
                DIRECTORY_SEPARATOR . 'img';
                $alumnis->move($destinationPath, $filename);
                $alumni->cover = $filename;
        }
        $alumni->save();
        return redirect('/admin/alumni');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         alumni::destroy($id);

        return redirect('/admin/alumni');
    }
    public function user()
    {
        $alumni = alumni::paginate(3);
        return view('alumni.alumni',compact('alumni'));
    }
}
