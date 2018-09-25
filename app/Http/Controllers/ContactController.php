<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('layouts.contact.admin.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.contact.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'city' =>'required',
                ]);

           $contact = Contact::create([
                'city' => $request->input('city'),
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'number' => $request->input('number'),
                'email' => $request->input('email'),
                'status' => $request->input('status'),
                
            ]);
    
            return redirect()
            ->route('contacts')
            ->with('status', 'Ciudad Creada Satisfactoriamente');
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
        $contact = Contact::find($id);
        return view('layouts.contact.admin.edit', compact('contact'));
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
        $contact = Contact::find($id);
        $contact->update([
            
            'city' => $request->input('city'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'number' => $request->input('number'),
            'email' => $request->input('email'),
            'status' => $request->input('status'),
            
        ]);

        return redirect()
        ->route('contacts')
        ->with('status', 'Ciudad Modificada Satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = contact::destroy($id);
        

        return redirect()
        ->route('contacts')
        ->with('status', 'Ciudad Eliminada Satisfactoriamente');
    }
}
