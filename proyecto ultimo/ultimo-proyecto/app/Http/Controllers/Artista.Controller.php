<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;
use App\Models\Artista;



class ArtistaController extends Controller
{

    public function index(){

        $artista = Artista::all();
        return view('artista.index',compact('artista'));
        
    }
}
