<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pricing;

class PricingController extends Controller
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
       $pricings = Pricing::all();
       return view('layouts.pricing.admin.index', compact('pricings'));
   
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('layouts.pricing.admin.create');
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
           'precio' =>'required',
           'ad1' =>'required',
           'ad2' =>'required',
           'ad3' =>'required',
               ]);

          $pricing = Pricing::create([
               'titulo' => $request->input('titulo'),
               'descripcion' => $request->input('descripcion'),
               'precio' => $request->input('precio'),
               'ad1' => $request->input('ad1'),
               'ad2' => $request->input('ad2'),
               'ad3' => $request->input('ad3'),
               
           ]);
   
           return redirect()
           ->route('pricings')
           ->with('status', 'Precio Creado Satisfactoriamente');
       
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
       $pricing = Pricing::find($id);
       return view('layouts.pricing.admin.edit', compact('pricing'));
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
       $pricing = Pricing::find($id);
       $pricing->update([
           
        'titulo' => $request->input('titulo'),
        'descripcion' => $request->input('descripcion'),
        'precio' => $request->input('precio'),
        'ad1' => $request->input('ad1'),
        'ad2' => $request->input('ad2'),
        'ad3' => $request->input('ad3'),
           
       ]);

       return redirect()
       ->route('pricings');
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
       $pricing = Pricing::destroy($id);
       

       return redirect()
       ->route('pricings')
       ->with('status', 'Precio Eliminado Satisfactoriamente');
   }
}

