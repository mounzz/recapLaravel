<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreelevesRequest;
use App\Http\Requests\UpdateelevesRequest;
use App\Models\eleves;

class ElevesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleves = eleves::all();
        return view('frontoffice.pages.eleves', compact('eleves'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreelevesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eleves = new eleves;
        $eleves -> nom = $request -> nom;
        $eleves -> prenom = $request -> prenom;
        $eleves -> age = $request -> age;
        $eleves -> etat = $request -> etat;
        $eleves -> save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_show = eleves::find($id);
        return view('backoffice.pages.backEleves', compact('id_show'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = eleves::find($id);
        $destroy -> delete();
        return redirect()->back();
    }

    public function deleteAll(){
        $deleteAll = eleves::truncate();
        return redirect("/eleves");
    }
}
