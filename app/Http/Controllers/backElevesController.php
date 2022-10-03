<?php

namespace App\Http\Controllers;

use App\Models\eleves;
use Illuminate\Http\Request;

class backElevesController extends Controller
{
    public function update(Request $request, $id){
        $eleves = eleves::find($id);
        $eleves -> nom = $request -> nom;
        $eleves -> prenom = $request -> prenom;
        $eleves -> age = $request -> age;
        $eleves -> etat = $request -> etat;
        $eleves -> save();
        return redirect()->back();
    }
}
