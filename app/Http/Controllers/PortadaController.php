<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portada;

class PortadaController extends Controller
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
        $portadas = Portada::all();
        return view('layouts.general.admin.index', compact('portadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
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
            'titulo' =>'required',
            'subtitulo' =>'required',
                ]);

           $portada = Portada::create([
                'titulo' => $request->input('titulo'),
                'subtitulo' => $request->input('subtitulo'),
                'status' => $request->input('status'),
                
            ]);
    
            return redirect()
            ->route('portadas')
            ->with('status', 'Titulo Creado Satisfactoriamente');
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
        $portadas = Portada::all();
        $portada = Portada::find($id);
        return view('layouts.general.admin.edit', compact('portada', 'portadas'));
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
        $portada = Portada::find($id);
        $portada->update([
            
            'titulo' => $request->input('titulo'),
            'subtitulo' => $request->input('subtitulo'),
            'status' => $request->input('status'),
            
        ]);

        return redirect()
        ->route('portadas');
        // ->with('status', 'Faq Modificado Satisfactoriamente');
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
