<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDiario;

class ControladorVistas extends Controller
{
    public function procesarRecuerdo(validadorDiario $request){
        return redirect() -> route('ingresar') -> with('confirmacion','Tu recuerdo llego al controlador');
        //return $request->all();
        //return $request -> path();
        //return $request -> url();
        //return $request -> ip();
    }
    public function showHome(){
        return view('home');
    }
    public function showIngresar(){
        return view('ingresar');
    }
    public function showRecuerdos(){
        return view('recuerdos');
    }
}
