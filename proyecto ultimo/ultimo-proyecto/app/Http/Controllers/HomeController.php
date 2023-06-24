<?php

namespace App\Http\Controller;

use Illuminate\Http\ValidatesRequest;


class HomerController extends Controller
{
    public function index(){
        
        return view('home.index');
    }

    public function Registrar(){

        return view('home.registrar');

    }

    public function Login(){

        return view('home.login');

    }

}
