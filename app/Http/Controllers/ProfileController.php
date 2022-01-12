<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //index function
    public function index (){
        //User
        $user = DB::table('users')->where('id',Auth::user()->id)->get();
        return view("profile",compact('user'));
    }
}
