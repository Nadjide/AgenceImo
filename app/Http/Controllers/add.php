<?php

namespace App\Http\Controllers;

use DB;
use App\Models\house;


use Illuminate\Http\Request;

class add extends Controller
{
    public function addHouse(Request $request){
        $house = new House();
        $house->name = $request->input("name");
        $house->adresse = $request->input("Adresse");
        $house->type = $request->input("TypeA");
        $house->typelocation = $request->input("TypeL");
        $house->etat = $request->input("Etat");
        $house->nameagent = $request->input("NomA");
        $house->image = $request->input("Image");
        $house->save();
        return redirect("/home");
    }

    public function index()
    {
        $house = DB::table('houses')->select('id','name','adresse','type','typelocation','nameagent','etat','image')->get();

        return view('Location')->with('house',$house);
    }


}
