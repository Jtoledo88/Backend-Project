<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
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
       $sliders = Slider::all();
       return view('layouts.index.admin.index', compact('sliders'));
   
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('layouts.index.admin.create');
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
           'intro' =>'required',
           
               ]);

          $slider = Slider::create([
               'title' => $request->input('title'),
               'intro' => $request->input('intro'),
               'status' => $request->input('status'),
               
           ]);
   
           return redirect()
           ->route('sliders')
           ->with('status', 'Slider Creado Satisfactoriamente');
       
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
       $slider = Slider::find($id);
       return view('layouts.index.admin.edit', compact('slider'));
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
        'title' =>'required',
        'intro' =>'required',
        
            ]);

       $slider = Slider::find($id);
       $slider->update([
           
        'title' => $request->input('title'),
        'intro' => $request->input('intro'),
        'status' => $request->input('status'),
           
       ]);

       return redirect()
       ->route('sliders')
       ->with('status', 'Slider Modificado Satisfactoriamente');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $slider = Slider::destroy($id);
       

       return redirect()
       ->route('sliders')
       ->with('status', 'Slider Eliminado Satisfactoriamente');
   }
}
