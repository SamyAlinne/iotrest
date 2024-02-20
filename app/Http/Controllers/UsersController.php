<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //consultar todos los usuarios
    public function index() {
        //return User::all(); -> Muestra todos los usuarios
        return User::paginate(); //Muestra todos los usuarios junto a su información detalladal
    }

    //consultar un solo usuario
    public function show($id) {
        return User::find($id);
    }

    //crear un usuario
    public function store(Request $request){
        return User::create($request->all());
    }

    //actualizar un usuario
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update($request->all());
        $user->save();
        return $user;
    }

    //eliminar un usuario
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return $user;
    }

}
