<?php

namespace App\Http\Controllers;

use App\Models\batiments;
use Illuminate\Http\Request;

class backBatimentController extends Controller
{
    public function update(Request $request, $id){
        $batiments = batiments::find($id);
        $batiments -> nom = $request -> nom ;
        $batiments -> description = $request -> description;
        $batiments -> save();
        return redirect()->back();
    }
}
