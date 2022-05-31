<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware(
            'auth:api',
        );
    }
    //LISTAR USUARIOS
    public function index() {
        $users = User::all();
        return $users;
    }

    //MUESTRA LA USERS
    public function show($id) {
        $user = User::find($id);
        return $user;
    }

    //CREAR NUEVO USUARIO
    public function store(Request $request) {
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->dni_type = $request->dni_type;
        $user->dni = $request->dni;

        $user->save();
    }
}
