<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typeformations;

class backTypesFormationsController extends Controller
{
    public function update(Request $request, $id){
        $types = typeformations::find($id);
        $types -> nom = $request -> nom;
        $types -> save();
        return redirect()->back();
    }

}
