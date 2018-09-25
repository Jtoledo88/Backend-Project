<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoAbout;

class InfosController extends Controller
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
        $infos = InfoAbout::all();
        return view('layouts.about.admin.infos', compact('infos'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.about.admin.create');
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
            'descripcion' =>'required',
                ]);

           $info = InfoAbout::create([
                'titulo' => $request->input('titulo'),
                'descripcion' => $request->input('descripcion'),
                'desc_res' => $request->input('desc_res'),
                // 'status' => $request->input('status'),
                
            ]);
    
            return redirect()
            ->route('infos')
            ->with('status', 'Informacion Creada Satisfactoriamente');
        
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
        $info = InfoAbout::find($id);
        return view('layouts.about.admin.edit', compact('info'));
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
        $info = InfoAbout::find($id);
        $info->update([
            
            'titulo' => $request->input('titulo'),
            'descripcion' => $request->input('descripcion'),
            'desc_res' => $request->input('desc_res'),
            // 'status' => $request->input('status'),
            
        ]);

        return redirect()
        ->route('infos');
        // ->with('status', 'Informacion Modificada Satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = InfoAbout::destroy($id);
        

        return redirect()
        ->route('infos')
        ->with('status', 'Informacion Eliminada Satisfactoriamente');
    }
}
