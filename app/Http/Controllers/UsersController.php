<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class UsersController extends Controller
{
    //consultar todos los usuarios
    public function index() {
        return User::all();
    }
}
