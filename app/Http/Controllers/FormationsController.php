<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreformationsRequest;
use App\Http\Requests\UpdateformationsRequest;
use App\Models\formations;

class FormationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = formations::all();
        return view('frontoffice.pages.formations', compact('formations'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreformationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formations = new formations;
        $formations -> nom = $request -> nom;
        $formations -> description = $request -> description;
        $formations -> save();
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_show = formations::find($id);
        return view('backoffice.pages.backFormations', compact('id_show'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = formations::find($id);
        $destroy -> delete();
        return redirect()->back;
    }

    public function deleteAll(){
        $deleteAll = formations::truncate();
        return redirect("/formations");
    }
}
