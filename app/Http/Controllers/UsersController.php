<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index() {
        $users = User::orderBy('id', 'DESC')->paginate(5);

        return view('admin.users.index')->with('users', $users);
    }
    
    public function create() {
        return view('admin.users.create');
    }
    
    public function store(Request $request) {
        $this->validate($request, [
            'name'      => 'min:4|max:120|required',
            'email'     => 'min:4|max:250|required|unique:users',
            'password'  => 'min:4|max:20|required'
        ]);

        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
    
        flash("El usuario $user->name ha sido creado correctamente.")->success()->important();
    
        return redirect()->route('users.index');
    }
    
    public function edit(User $user) {
        return view('admin.users.edit')->with('user', $user);
    }
    
    public function update(Request $request, User $user) {
        $user->fill($request->all());
        $user->save();

        flash("El usuario $user->name se ha editado de manera satisfactoria.")->success()->important();

        return redirect()->route('users.index');
    }
    
    public function destroy(User $user) {
        $user->delete();

        flash("El usuario $user->name ha sido eliminado correctamente.")->success()->important();

        return redirect()->route('users.index');
    }
}
