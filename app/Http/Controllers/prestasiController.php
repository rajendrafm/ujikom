<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prestasi;
class prestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = prestasi::all();
        return view('prestasi.adminindex',compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $prestasi = prestasi::all();
         return view('prestasi.create', compact('prestasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prestasi = new prestasi;
        $prestasi->title = $request->a;
        $prestasi->isi = $request->c;

        if($request->hasFile('d')){
            $prestasis = $request->file('d');
            $extension = $prestasis->getClientOriginalExtension();
            $filename = str_random(6). '.' . $extension;
            $destinationPath = public_path() .
                DIRECTORY_SEPARATOR . 'img';
                $prestasis->move($destinationPath, $filename);
                $prestasi->cover = $filename;
        }
        $prestasi->save();
        return redirect('/admin/prestasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestasi=prestasi::findOrFail($id);
        return view ('prestasi.show', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestasi= prestasi::findOrFail($id);
        return view('prestasi.edit', compact('prestasi'));
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
         $prestasi =  prestasi::findOrFail($id);
        $prestasi->title = $request->a;
        $prestasi->isi = $request->c;

        if($request->hasFile('d')){
            $prestasis = $request->file('d');
            $extension = $prestasis->getClientOriginalExtension();
            $filename = str_random(6). '.' . $extension;
            $destinationPath = public_path() .
                DIRECTORY_SEPARATOR . 'img';
                $prestasis->move($destinationPath, $filename);
                $prestasi->cover = $filename;
        }
        $prestasi->save();
        return redirect('/admin/prestasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       prestasi::destroy($id);
        return redirect('/admin/prestasi');
    }

    public function user()
    {
         $prestasi = prestasi::paginate(3);
        return view('prestasi.prestasi',compact('prestasi'));
    }
}
