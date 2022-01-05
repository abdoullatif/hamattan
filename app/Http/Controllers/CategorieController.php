<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //index function
    public function index (){
        return view("categories");
    }

    //Show Controller (Afficher kes themes)
    public function showFormsCategories (){
        return view("formscategories");
    }

    //Show Controller (Afficher kes themes)
    public function storeCategories (){
        return view("categories");
    }

}
