<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretypeformationsRequest;
use App\Http\Requests\UpdatetypeformationsRequest;
use App\Models\typeformations;

class TypeformationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = typeformations::all();
        return view('frontoffice.pages.typeformations', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretypeformationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $types = new typeformations;
        $types -> nom = $request -> nom;
        $types -> save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\typeformations  $typeformations
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_show = typeformations::find($id);
        return view('backoffice.pages.backTypeFormations', compact('id_show'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\typeformations  $typeformations
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = typeformations::find($id);
        $destroy -> delete();
        return redirect()->back();
    }

    public function deleteAll(){
        $deleteAll = typeformations::truncate();
        return redirect("/typesformations");
    }
}
