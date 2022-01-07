<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Audio;
use App\Models\Livre;
use App\Models\Theme;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //index function
    public function index (){
        return view("login");
        //return view("home");
    }

    public function showDashboad (){
        //Data
        $theme = Theme::count('id');
        $page = Page::count('id');
        $audio = Audio::count('id');
        $livre = Livre::count('id');
        return view("home",compact('theme','page','audio','livre'));
        //return view("home");
    }
}
