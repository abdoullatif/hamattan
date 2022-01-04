<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    //index function
    public function index (){
        return view("themes");
    }

    //Show Controller (Afficher kes themes)
    public function showFormsThemes (){
        return view("formsthemes");
    }

    //Show Controller (Afficher kes themes)
    public function storeThemes (){
        return view("themes");
    }



}
