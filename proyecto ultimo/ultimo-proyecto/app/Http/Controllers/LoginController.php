<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;


class ArtistaController extends Controller
{

    public function login(){

        return view('login.index');

    }
}