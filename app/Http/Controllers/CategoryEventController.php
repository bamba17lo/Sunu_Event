<?php

namespace App\Http\Controllers;

use App\Models\CategoryEvent;
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

    public function categoryDashboard(){
        return view('Dashboard.category');
    }

    public function storeCategory(Request $request){
       $data =  $request->validate([
            'libelle'=> 'required'
        ]);
        $category = new CategoryEvent();
        $category->libelle = $data['libelle'];
        $category->save();

        return redirect('categories');
    }
}
