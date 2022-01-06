<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //index function
    public function index (){
        $categories = Categorie::get();
        return view("categories",compact('categories'));
    }

    //Show Controller (Afficher kes themes)
    public function showFormsCategories (){
        return view("formscategories");
    }

    //Show Controller (Afficher kes themes)
    public function storeCategories (Request $request){
        //Require
        $request->validate([
            'categorie' => 'required',
        ]);

        $categorie = new Categorie;
        $categorie->categorie = $request->categorie;
        $categorie->save();

        return redirect()->route('categories')
                        ->with('success','categories enregistrer avec succes.');

        //return view("categories");
    }

}
