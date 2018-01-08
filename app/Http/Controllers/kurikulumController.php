<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kurikulum;

class kurikulumController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurikulum = kurikulum::all();
        return view('kurikulum.adminindex',compact('kurikulum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $kurikulum = kurikulum::all();
         return view('kurikulum.create', compact('kurikulum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kurikulum = new kurikulum;
        $kurikulum->nama = $request->a;
        $kurikulum->jabatan = $request->c;

        if($request->hasFile('d')){
            $kurikulums = $request->file('d');
            $extension = $kurikulums->getClientOriginalExtension();
            $filename = str_random(6). '.' . $extension;
            $destinationPath = public_path() .
                DIRECTORY_SEPARATOR . 'img';
                $kurikulums ->move($destinationPath, $filename);
                $kurikulum->cover = $filename;
        }
        $kurikulum->save();
        return redirect('/admin/kurikulum');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kurikulum=kurikulum::findOrFail($id);
        return view ('kurikulum.show', compact('kurikulum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kurikulum= kurikulum::findOrFail($id);
        return view('kurikulum.edit', compact('kurikulum'));
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
        $kurikulum =  kurikulum::findOrFail($id);
        $kurikulum->nama = $request->a;
        $kurikulum->jabatan = $request->c;

        if($request->hasFile('d')){
            $kurikulums = $request->file('d');
            $extension = $kurikulums->getClientOriginalExtension();
            $filename = str_random(6). '.' . $extension;
            $destinationPath = public_path() .
                DIRECTORY_SEPARATOR . 'img';
                $kurikulums->move($destinationPath, $filename);
                $kurikulum->cover = $filename;
        }
        $kurikulum->save();
        return redirect('/admin/kurikulum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         kurikulum::destroy($id);

        return redirect('/admin/kurikulum');
    }
}
