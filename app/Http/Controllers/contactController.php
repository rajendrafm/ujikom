<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = contact::all();
        return view('contact.adminindex',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $contact = contact::all();
         return view('contact.create', compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new contact;
        $contact->title = $request->a;
        $contact->isi = $request->c;

        if($request->hasFile('d')){
            $contacts = $request->file('d');
            $extension = $contacts->getClientOriginalExtension();
            $filename = str_random(6). '.' . $extension;
            $destinationPath = public_path() .
                DIRECTORY_SEPARATOR . 'img';
                $contacts->move($destinationPath, $filename);
                $contact->cover = $filename;
        }
        $contact->save();
        return redirect('/admin/contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact=contact::findOrFail($id);
        return view ('contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact= contact::findOrFail($id);
        return view('contact.edit', compact('contact'));
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
         $contact =  contact::findOrFail($id);
        $contact->title = $request->a;
        $contact->isi = $request->c;

        if($request->hasFile('d')){
            $contact = $request->file('d');
            $extension = $contact->getClientOriginalExtension();
            $filename = str_random(6). '.' . $extension;
            $destinationPath = public_path() .
                DIRECTORY_SEPARATOR . 'img';
                $contact->move($destinationPath, $filename);
                $contact->cover = $filename;
        }
        $contact->save();
        return redirect('/admin/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}