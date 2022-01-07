<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Audio;
use App\Models\Livre;
use App\Models\Theme;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Livre_categorie;
use Illuminate\Support\Facades\DB;

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
            'titre' => 'required|unique:livre',
            'theme_id' => 'required',
            'categorie' => 'required',
            'resume_livre' => 'required',
            'biographie_auteur' => 'required',
            'prix' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        if($request->categorie == "Ecriture") {
            $request->validate([
                'page' => 'required|mimes:pdf', //required|doc|mimes:pdf|max:10024
            ]);
            if ($image = $request->file('page')) {
                $destinationPath = 'uploads/livres/'.$request->titre.'/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $request->page = "$profileImage";
            }
        } else if ($request->categorie == "Audio") {
            $request->validate([
                'audio' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav', //required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav //required|audio|mimes:mp3,aac,mp4a|max:10024
            ]);
            if ($image = $request->file('audio')) {
                $destinationPath = 'uploads/livres/'.$request->titre.'/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $request->audio = "$profileImage";
            }
        } else if ($request->categorie == "Ecriture + Audio") {
            $request->validate([
                'page' => 'required|mimes:pdf',
                'audio' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav',
            ]);
            if ($image = $request->file('page')) {
                $destinationPath = 'uploads/livres/'.$request->titre.'/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $request->page = "$profileImage";
            }
            if ($image = $request->file('audio')) {
                $destinationPath = 'uploads/livres/'.$request->titre.'/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $request->audio = "$profileImage";
            }
        }

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/livres/'.$request->titre.'/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $request->image = "$profileImage";
        }

        //livre

        $livre = new Livre;
        $livre->titre = $request->titre;
        $livre->theme_id = $request->theme_id;
        $livre->statut = '1';
        $livre->categorie = $request->categorie;
        $livre->resume_livre = $request->resume_livre;
        $livre->biographie_auteur = $request->biographie_auteur;
        $livre->prix = $request->prix;
        $livre->couverture_livre = $request->image;
        $livre->date_publication = now();
        $livre->save();

        //audio und pdf
        if($request->categorie == "Ecriture") {
            //Page
            $page = new Page;
            $page->livre_id = $livre->id;
            $page->page_livre = $request->page;
            $page->save();
        } else if ($request->categorie == "Audio") {
            //Audio
            $audio = new Audio;
            $audio->livre_id = $livre->id;
            $audio->contenue_audio = $request->audio;
            $audio->save();
        } else if ($request->categorie == "Ecriture + Audio") {
            //Page
            $page = new Page;
            $page->livre_id = $livre->id;
            $page->page_livre = $request->page;
            $page->save();
            //Audio
            $audio = new Audio;
            $audio->livre_id = $livre->id;
            $audio->contenue_audio = $request->audio;
            $audio->save();
        }

        return redirect()->route('livres')
                        ->with('success','Livre enregistrer avec succes.');

        //return view("livres");
    }

    //Edit livre
    public function editLivres ($livre_id){
        //dd($livre_id);
        $themes = Theme::get();
        $livre = DB::table('livre')->where('id',$livre_id)->get();
        $page = DB::table('page')->where('livre_id',$livre_id)->get();
        $audio = DB::table('audio')->where('livre_id',$livre_id)->get();
        
        //$livre = DB::select('SELECT * FROM livre WHERE name = ?',[]);
        return view("editlivres",compact('themes','livre','page','audio'));
    }

    //Update livre
    public function updateLivres (Request $request){
        return view("formslivresedit");
    }
}
