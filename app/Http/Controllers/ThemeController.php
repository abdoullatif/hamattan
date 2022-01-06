<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    //index function
    public function index (){
        $themes = Theme::get();
        return view("themes",compact('themes'));
    }

    //Show Controller (Afficher kes themes)
    public function showFormsThemes (){
        return view("formsthemes");
    }

    //Store
    public function storeThemes (Request $request){
        //Require
        $request->validate([
            'theme' => 'required',
            //'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        //$input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/themes/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $request->image = "$profileImage";
        }

        $theme = new Theme;
        $theme->nom_theme = $request->theme;
        $theme->couverture_theme = $request->image;
        $theme->save();
    
        //Theme::create($input);
     
        return redirect()->route('themes')
                        ->with('success','Thematique enregistrer avec succes.');
        
        //return view("themes");
    }

    //Edite

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Theme $theme)
    {
        //Require
        $request->validate([
            'theme' => 'required',
            //'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/themes/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $request->image = "$profileImage";
        }else{
            unset($request->image);
        }
          
        $theme = new Theme;
        $theme->nom_theme = $request->theme;
        $theme->couverture_theme = $request->image;
        $theme->update();

        //$product->update($input);
    
        return redirect()->route('themes')
                        ->with('success','Thematique modifier avec succes.');
    }

    //Destroye

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theme $theme)
    {
        $theme->delete();
     
        return redirect()->route('themes')
                        ->with('success','Thematique supprimer avec succes.');
    }


}
