<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\house;

class AppartController extends Controller
{
    function list()
    {
        $house=house::all();
        return view('list',['house'=>$house]);
    }

    function delete($id)
    {
        $house= house::find($id);
        $house->delete();
        return redirect('list');
    }

    function showData($id)
    {
       $house=house::find($id);
       return view('edit',['house'=>$house]);
    }

    function update(Request $req)
    {
        $house=house::find($req->id);
        $house->name=$req->name;
        $house->adresse=$req->adresse;
        $house->etat=$req->etat;
        $house->nameagent=$req->nameagent;
        $house->save();
        return redirect('list');
    }
}
