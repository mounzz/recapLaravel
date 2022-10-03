<?php

namespace App\Http\Controllers;

use App\Models\formations;
use Illuminate\Http\Request;

class backFormationsController extends Controller
{
    public function update(Request $request, $id){
        $formations = formations::find($id);
        $formations -> nom = $request -> nom;
        $formations -> description = $request -> description;
        $formations -> save();
        return redirect()->back();
    }
}
