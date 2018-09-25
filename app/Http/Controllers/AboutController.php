<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\AboutDes;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
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
        $abouts = AboutDes::all();
        return view('layouts.about.admin.aboutDes', compact('abouts'));
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.about.admin.create2');
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
            'titulo' =>'required',
            'descripcion' =>'required',
                ]);
                $file_name = 'sinfoto.jpg';
                if($request->file('image-file')) {
                    $img = $request->file('image-file');
                    $file_ext = $img->getClientOriginalExtension();
                    $file_name = $request->input('id').".".$file_ext;
                    Storage::disk('imagesAbout')->put(
                        $file_name,
                        file_get_contents($img->getRealPath())
                    );
                }
           $about = AboutDes::create([
            'image_name' => $file_name,
            'titulo' => $request->input('titulo'),
            'descripcion' => $request->input('descripcion'),
                
                // 'status' => $request->input('status'),
                
            ]);
    
            return redirect()
            ->route('abouts')
            ->with('status', 'Descripcion Creada Satisfactoriamente');
        
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
        $about = AboutDes::find($id);
        return view('layouts.about.admin.edit2', compact('about'));
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
            'titulo' =>'required',
            'descripcion' =>'required',
                ]);
                $file_name = 'sinfoto.jpg';
                if($request->file('image-file')) {
                    $img = $request->file('image-file');
                    $file_ext = $img->getClientOriginalExtension();
                    $file_name = $request->input('id').".".$file_ext;
                    Storage::disk('imagesAbout')->put(
                        $file_name,
                        file_get_contents($img->getRealPath())
                    );
                }
        $about = AboutDes::find($id);
        $about->update([
            'image_name' => $file_name,
            'titulo' => $request->input('titulo'),
            'descripcion' => $request->input('descripcion'),
            
            // 'status' => $request->input('status'),
            
        ]);
        return redirect()
        ->route('abouts');
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
        $about = AboutDes::destroy($id);
        
        return redirect()
        ->route('abouts')
        ->with('status', 'Descripcion Eliminada Satisfactoriamente');
    }
}


