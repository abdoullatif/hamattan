<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;
use App\Models\User;

class RegisterController extends Controller
{
    //Page Register
    public function index (){
        return view("register");
    }

    //CustomRegister
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);
           
        $data = $request->all();

        if ($image = $request->file('avatar')) {
            $destinationPath = 'uploads/utilisateur/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['avatar'] = "$profileImage";
        }

        $check = $this->create($data);
         
        return redirect("users")->withSuccess('Utilisateur enregistrer avec succes');
    }

    //Create
    public function create(array $data)
    {
      return User::create([
        'nom' => $data['nom'],
        'prenom' => $data['prenom'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'role' => $data['role'],
        'avatar' => $data['avatar'],
        'flagtransmis' => now(),
      ]);
    }


}
