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
}
