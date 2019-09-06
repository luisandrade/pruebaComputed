<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    public function selectUsuarios(Request $request){
        //if (!$request->ajax()) return redirect('/');

        $usuarios = User::select('users.id','users.nombre_usuario')
        ->orderBy('users.nombre_usuario', 'asc')->get();
        return ['usuarios' => $usuarios];
    }
}
