<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Team;

class TeamController extends Controller
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
        $teams = Team::all();
        return view('layouts.about.admin.teams', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.about.admin.create5');
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
            'image-file' => 'image|mimes:png,jpg,jpeg,bmp,svg',
            'nombre' =>'required',
            'cargo' =>'required',
            'mensaje' =>'required',
          
                ]);

                $file_name = 'sinfoto.jpg';
                if($request->file('image-file')) {
                $img = $request->file('image-file');
                $file_ext = $img->getClientOriginalExtension();
                $file_name = $request->input('nombre').".".$file_ext;
                Storage::disk('imagesTeam')->put(
                    $file_name,
                    file_get_contents($img->getRealPath())
                );
                }

           $team = Team::create([
                'image_name' => $file_name,
                'nombre' => $request->input('nombre'),
                'cargo' => $request->input('cargo'),
                'mensaje' => $request->input('mensaje'),
     
                // 'status' => $request->input('status'),
                
            ]);
    
            return redirect()
            ->route('teams')
            ->with('status', 'Personal Creado Satisfactoriamente');
        
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
        $team = Team::find($id);
        return view('layouts.about.admin.edit5', compact('team'));
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

        $request->validate([
            'image-file' => 'image|mimes:png,jpg,jpeg,bmp,svg',
            'nombre' =>'required',
            'cargo' =>'required',
            'mensaje' =>'required',
           
             ]);
    
            $file_name = 'sinfoto.jpg';
            if($request->file('image-file')) {
            $img = $request->file('image-file');
            $file_ext = $img->getClientOriginalExtension();
            $file_name = $request->input('nombre').".".$file_ext;
            Storage::disk('imagesTeam')->put(
                $file_name,
                file_get_contents($img->getRealPath())
            );
            }
            
        $team = Team::find($id);
        $team->update([
            'image_name' => $file_name,
            'nombre' => $request->input('nombre'),
            'cargo' => $request->input('cargo'),
            'mensaje' => $request->input('mensaje'),
       
            // 'status' => $request->input('status'),
            
        ]);

        return redirect()
        ->route('teams');
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
        $team = Team::destroy($id);
       
        
        return redirect()
        ->route('teams')
        ->with('status', 'Personal Eliminado Satisfactoriamente');
    }
}
