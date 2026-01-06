<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = User::all();
        dd($usuarios);
    }

    /*
    public function show(){
        $id = Auth::user()->id;
        $usuario = User::find($id);
        dd($usuario);
    }*/

    public function update(){
        
    }


}
