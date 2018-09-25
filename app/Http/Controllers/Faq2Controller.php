<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq2;

class Faq2Controller extends Controller
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
        $faq2s = Faq2::all();
        return view('layouts.faq.admin.indexfaq2', compact('faq2s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.faq.admin.createfaq2');
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
            'title' =>'required',
                ]);

            Faq2::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'description2' => $request->input('description2'),
                // 'status' => $request->input('status'),
                
            ]);
    
            return redirect()
            ->route('faq2s')
            ->with('status', 'Faq2 Creado Satisfactoriamente');
        
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
        $faq2 = Faq2::find($id);
        return view('layouts.faq.admin.editfaq2', compact('faq2'));
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
        $faq2 = Faq2::find($id);
        $faq2->update([
            
            'title' => $request->input('title'),
                'description' => $request->input('description'),
                'description2' => $request->input('description2'),
            // 'status' => $request->input('status'),
            
        ]);

        return redirect()
        ->route('faq2s')
        ->with('status', 'Faq2 Modificado Satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Faq2::destroy($id);
        return redirect()
        ->route('faq2s')
        ->with('status', 'Faq Eliminado Satisfactoriamente');
    }
}
