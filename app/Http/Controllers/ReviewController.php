<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestimonialPri;

class ReviewController extends Controller
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
       $testimonials = TestimonialPri::all();
       return view('layouts.pricing.admin.indextesti', compact('testimonials'));
   
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('layouts.pricing.admin.createtesti');
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
           'texto' =>'required',
           'escritor' =>'required',
               ]);

          $testimonial = TestimonialPri::create([
               'texto' => $request->input('texto'),
               'escritor' => $request->input('escritor'),
             
               
           ]);
   
           return redirect()
           ->route('reviews')
           ->with('status', 'Opinión Creada Satisfactoriamente');
       
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
       $testimonial = TestimonialPri::find($id);
       return view('layouts.pricing.admin.edittest', compact('testimonial'));
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
       $testimonial = TestimonialPri::find($id);
       $testimonial->update([
           
        'texto' => $request->input('texto'),
        'escritor' => $request->input('escritor'),
           // 'status' => $request->input('status'),
           
       ]);

       return redirect()
       ->route('reviews')
       ->with('status', 'Opinión Modificada Satisfactoriamente');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $testimonial = TestimonialPri::destroy($id);
       

       return redirect()
       ->route('reviews')
       ->with('status', 'Opinión Eliminada Satisfactoriamente');
   }
}

