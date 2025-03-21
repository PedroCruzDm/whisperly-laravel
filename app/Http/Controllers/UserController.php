<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public User $user;
    public function __construct(){
        $this->user = new User();
    }

    public function index()
    {
        $users = $this->user->all();
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // var_dump($request->except(['_token']));
       $created = $this->user->create([
        'name' => $request->name,
        'nickname' => $request->nickname,
        'email' => $request->email,
        'phone' => $request->phone,
        'password' => password_hash($request->password, PASSWORD_DEFAULT)
       ]);
       if($created){
           return redirect()->back()->with('message', 'User created successfully');
       }
            return redirect()->back()->with('message', 'User not created successfully');
    }

    public function show(User $user)
    {
       // var_dump($user->name);  
       return view('users.show', ['user' => $user]);      
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }


    public function update(Request $request, $id)
    {
        $updated = $this->user->where('id', $id)->update(($request->except('_token', '_method')));

        if($updated){
            return redirect()->back()->with('message', 'User updated successfully');
        }
            return redirect()->back()->with('message', 'User not updated successfully');
    }

    public function destroy($id)
    {
        $this->user->where('id', $id)->delete();
        return redirect()->route('user.index')->with('message', 'User deleted successfully');
    }
}
