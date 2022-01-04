<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivreController extends Controller
{
    //index function
    public function index (){
        return view("livres");
    }

    //Show add livre
    public function showFormsLivres (){
        return view("formslivres");
    }
}
