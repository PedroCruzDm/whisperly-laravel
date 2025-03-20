<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{

    public function index(){
        $users = User::orderByDesc('id')->get();
        return view('users.index', ['users' => $users]);
    }
    public function create(Request $request){
        $user = new User();
        $user->name = $request->nome;
        $user->nickname = $request->nickUser;
        $user->phone = $request->telefone;
        $user->email = $request->email;
        $user->password = $request->senha.password_hash($request->senha, PASSWORD_DEFAULT);
        $user->save(); 
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuário apagado com sucesso!');
    }

    public function show(){   
        $user = User::orderByDesc('id')->get();        
        $users = User::all();
        return view('users.show', compact('users'));
        //return view('Users.show', ['users' => $user]);
    }


}