<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
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
        $services = Service::all();
        return view('layouts.about.admin.service', compact('services'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.about.admin.service');
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

           $service = InfoAbout::create([
                'titulo' => $request->input('titulo'),
                'descripcion' => $request->input('descripcion'),
                
                // 'status' => $request->input('status'),
                
            ]);
    
            return redirect()
            ->route('services')
            ->with('status', 'Servicio Creado Satisfactoriamente');
        
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
        $service = Service::find($id);
        return view('layouts.about.admin.edit3', compact('service'));
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
        $service = Service::find($id);
        $service->update([
            
            'titulo' => $request->input('titulo'),
            'descripcion' => $request->input('descripcion'),
            
            // 'status' => $request->input('status'),
            
        ]);

        return redirect()
        ->route('services');
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
        $service = Service::destroy($id);
        

        return redirect()
        ->route('services')
        ->with('status', 'Servicio Eliminado Satisfactoriamente');
    }
}
