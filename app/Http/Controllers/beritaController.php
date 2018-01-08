<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;
class beritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = berita::all();
        return view('berita.adminindex',compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $berita = berita::all();
         return view('berita.create', compact('berita'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $berita = new berita;
        $berita->title = $request->a;
        $berita->isi = $request->c;

        if($request->hasFile('d')){
            $beritas = $request->file('d');
            $extension = $beritas->getClientOriginalExtension();
            $filename = str_random(6). '.' . $extension;
            $destinationPath = public_path() .
                DIRECTORY_SEPARATOR . 'img';
                $beritas->move($destinationPath, $filename);
                $berita->cover = $filename;
        }
        $berita->save();
        return redirect('/admin/berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita=berita::findOrFail($id);
        return view ('berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita= berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
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
         $berita =  berita::findOrFail($id);
        $berita->title = $request->a;
        $berita->isi = $request->c;

        if($request->hasFile('d')){
            $beritas = $request->file('d');
            $extension = $beritas->getClientOriginalExtension();
            $filename = str_random(6). '.' . $extension;
            $destinationPath = public_path() .
                DIRECTORY_SEPARATOR . 'img';
                $beritas->move($destinationPath, $filename);
                $berita->cover = $filename;
        }
        $berita->save();
        return redirect('/admin/berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        berita::destroy($id);

        return redirect('/admin/berita');
    }
}
