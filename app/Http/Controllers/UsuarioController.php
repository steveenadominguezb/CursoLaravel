<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class UsuarioController extends Controller
{
    /**
     * index para mostrar todos los elementos
     * store para guardar un elemento
     * update para actualizar
     * detroy para eliminar
     * edit para mostrar el formulario de edición
     */

     public function store(Request $request){
         $request->validate([
             'name' => 'required|min:3'
         ]);

         $usuario = new usuario;
         $usuario->name = $request->name;
         $usuario->save();

         return redirect()->route('usuarios')->with('success', 'Usuario Creado');
     }

    public function index(){
        $usuarios = usuario::all();
        return view('index', ['usuarios' => $usuarios]);
    }
}
