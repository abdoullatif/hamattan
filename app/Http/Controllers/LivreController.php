<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Theme;
use App\Models\Categorie;
use App\Models\Livre_categorie;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    //index function
    public function index (){
        //Data
        $themes = Theme::get();
        $categories = Categorie::get();
        $livres = Livre::get();
        return view("livres",compact('themes','categories','livres'));
    }

    //Show add livre
    public function showFormsLivres (){
        //Data
        $themes = Theme::get();
        $categories = Categorie::get();
        return view("formslivres",compact('themes','categories'));
    }

    //Show Controller (Afficher kes themes)
    public function storeLivres (Request $request){
        //Require
        $request->validate([
            'titre' => 'required',
            'theme_id' => 'required',
            'categorie_id' => 'required',
            'resume_livre' => 'required',
            'biographie_auteur' => 'required',
            'prix' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/livres/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $request->image = "$profileImage";
        }

        //livre

        $livre = new Livre;
        $livre->titre = $request->titre;
        $livre->theme_id = $request->theme_id;
        $livre->statut = '1';
        $livre->resume_livre = $request->resume_livre;
        $livre->biographie_auteur = $request->biographie_auteur;
        $livre->prix = $request->prix;
        $livre->couverture_livre = $request->image;
        $livre->date_publication = now();
        $livre->save();

        //livre_categorie

        $livre_categorie = new Livre_categorie;
        $livre_categorie->livre_id = $livre->id;
        $livre_categorie->categorie_id = $request->categorie_id;
        $livre_categorie->save();

        return redirect()->route('livres')
                        ->with('success','Livre enregistrer avec succes.');

        //return view("livres");
    }

    //Show add livre
    public function storeLivresContent (){
        return view("formslivrescontent");
    }
}
