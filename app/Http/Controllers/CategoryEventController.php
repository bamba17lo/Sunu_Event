<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryEventController extends Controller
{
    public function categoryMusic(){
        return view('Categorie/musique');
    }

    public function categorySport(){
        return view('Categorie/sport');
    }

    public function categoryMode(){
        return view('Categorie/mode');
    }

    public function categoryEducation(){
        return view('Categorie/education');
    }
    public function categoryConference(){
        return view('Categorie/conference');
    }
}
