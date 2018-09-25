<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
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
       $clients = Client::all();
       return view('layouts.products.admin.indexclient', compact('clients'));
   
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('layouts.products.admin.createclient');
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
           'image-file' => 'image|mimes:png,jpg,bmp,svg',
           'title' =>'required',
           'resume' =>'required',
            ]);

            $file_name = 'sinfoto.jpg';
            if($request->file('image-file')) {
            $img = $request->file('image-file');
            $file_ext = $img->getClientOriginalExtension();
            $file_name = $request->input('title').".".$file_ext;
            Storage::disk('imagesPosts')->put(
                $file_name,
                file_get_contents($img->getRealPath())
            );
            }

          $client = Client::create([
               'image_name' => $file_name,
               'title' => $request->input('title'),
               'resume' => $request->input('resume'),
               
           ]);
   
           return redirect()
           ->route('clients')
           ->with('status', 'Cliente Creado Satisfactoriamente');
       
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
       $client = Client::find($id);
       return view('layouts.products.admin.editclient', compact('client'));
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
        'image-file' => 'image|mimes:png,jpg,bmp,svg',
        'title' =>'required',
        'resume' =>'required',
         ]);

        $file_name = 'sinfoto.jpg';
        if($request->file('image-file')) {
        $img = $request->file('image-file');
        $file_ext = $img->getClientOriginalExtension();
        $file_name = $request->input('title').".".$file_ext;
        Storage::disk('imagesPosts')->put(
            $file_name,
            file_get_contents($img->getRealPath())
        );
        }


       $client = Client::find($id);
       $client->update([
            'image_name' => $file_name,
            'title' => $request->input('title'),
            'resume' => $request->input('resume'),
           
       ]);

       return redirect()
       ->route('clients');
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
       $client = Client::destroy($id);
    

       return redirect()
       ->route('clients')
       ->with('status', 'Cliente Eliminado Satisfactoriamente');
   }
}
