<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portada;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $portadas = Portada::all();
       
        return view('admin', compact('portadas'));
    }
}
