<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importamos el modelo User
use App\Models\User;

class UsuarioController extends Controller
{
    //
    public function index(){
        /*
        # Consulta general sin paginación
        $usuarios = User::all();
        return view('usuarios')->with('usuarios', $usuarios);
        # Otra forma de enviar datos a una vista
        //return view('usuarios', compact('usuarios'));
        */

        # Consulta general con paginación
        $usuarios = User::paginate(7);
        return view('usuarios')->with('usuarios', $usuarios);
    }
}
