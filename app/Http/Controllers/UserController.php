<?php

namespace App\Http\Controllers; // Adicione o namespace correto

use App\Models\User; // Certifique-se de que o modelo User está importado
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // Use o modelo User corretamente        
        $user = User::orderByDesc('id')->get();        
        return view('Users.show', ['users' => $user]);
    }
}