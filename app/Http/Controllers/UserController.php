<?php

namespace App\Http\Controllers; // Adicione o namespace correto

use App\Models\User; // Certifique-se de que o modelo User está importado
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function cadastrar(Request $request){
        // Use o modelo User corretamente
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return view('Users.show', ['users' => User::all()]);
    }
    public function listar(){
        // Use o modelo User corretamente        
        $user = User::orderByDesc('id')->get();        
        return view('Users.show', ['users' => $user]);
    }

    public function registrar(){
        
    }
}