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
     * destroy para eliminar
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
    public function show($id){
        $usuario = usuario::find($id);
        return view('show', ['usuario' => $usuario]);
    }
    public function destroy($id){
        $usuario = usuario::find($id);
        $usuario->delete();

        return redirect()->route('usuarios')->with('success', 'Registro eliminado');

    }
    public function update($id, Request $request){
        $usuario = usuario::find($id);
        $usuario->name = $request->name;
        $usuario->save();
        //return view('index', ['success' => 'Registro actualizado']);
        return redirect()->route('usuarios')->with('success', 'Registro actualizado');
    }
}
