<?php

namespace App\Http\Controllers;

use App\Models\CategoryEvent;
use App\Models\Region;
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
        $category = CategoryEvent::all();
        $nbrCategory = CategoryEvent::withCount('events')->get();
        
        return view('Dashboard.category')->with(['category'=>$nbrCategory]);
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



    // ---------------------
    public function regionDashboard(){
        $nbrRegion = Region::withCount('events')->get();
        
        return view('Dashboard.region')->with(['category'=>$nbrRegion]);
    }

    public function storeRegion(Request $request){
        $data =  $request->validate([
             'libelle'=> 'required'
         ]);
         $region = new Region();
         $region->libelle = $data['libelle'];
         $region->save();
 
         return redirect('region');
     }
    
}
