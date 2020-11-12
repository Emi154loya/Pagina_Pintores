<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaintController extends Controller
{

    //Formulario
    public function login(){
        return view('login');
    }

    public function validar(Request $request){
        $user = $request -> input ('user');
        $pass = $request -> input('pass');

        return view('inicio');
    }

    //Pintores
    public function inicio(){
        return view('inicio');
    }

    public function vincent(){
        return view('pintores.vincent');
    }

    public function leonardo(){
        return view('pintores.leonardo');
    }

    public function claude(){
        return view('pintores.claude');
    }

    public function john(){
        return view('pintores.john');
    }
}


