<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Page itilisateur
    public function index (){
        return view("user");
    }

    //Page itilisateur
    public function showallUser (){
        $users = User::where('email','=','root@gmail.com')->get();
        return view("users",compact('users'));
    }

}
