<?php

namespace App\Http\Controllers;

use App\Models\Langue;
use Illuminate\Http\Request;

class LangueController extends Controller
{
    //index function
    public function index (){
        $langues = Langue::get();
        return view("langue",compact('langues'));
    }

    //Show Controller ()
    public function showFormsLangue (){
        return view("formslang");
    }

    //Show Controller (Afficher kes themes)
    public function storeLangue (Request $request){
        //Require
        $request->validate([
            'langue' => 'required',
        ]);

        $langue = new Langue;
        $langue->langue = $request->langue;
        $langue->flagtransmis = now();
        $langue->save();

        return redirect()->route('langue.forms')
                        ->with('success','Langue enregistrer avec succes.');

        //return view("langue");
    }

}
