<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialController extends Controller
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
        $testimonials = Testimonial::all();
        return view('layouts.about.admin.testimonials', compact('testimonials'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.about.admin.create4');
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
            'nota' =>'required',
            'escritor' =>'required',
                ]);

           $testimonial = Testimonial::create([
                'nota' => $request->input('nota'),
                'escritor' => $request->input('escritor'),
                
                // 'status' => $request->input('status'),
                
            ]);
    
            return redirect()
            ->route('testimonials')
            ->with('status', 'Testimonial Creado Satisfactoriamente');
        
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
        $testimonial = Testimonial::find($id);
        return view('layouts.about.admin.edit4', compact('testimonial'));
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
        $testimonial = Testimonial::find($id);
        $testimonial->update([
            
            'nota' => $request->input('nota'),
            'escritor' => $request->input('escritor'),
            // 'status' => $request->input('status'),
            
        ]);

        return redirect()
        ->route('testimonials');
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
        $testimonial = Testimonial::destroy($id);
        

        return redirect()
        ->route('testimonials')
        ->with('status', 'Testimonial Eliminado Satisfactoriamente');
    }
}
