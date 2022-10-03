<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebatimentsRequest;
use App\Http\Requests\UpdatebatimentsRequest;
use App\Models\batiments;

class BatimentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batiments = batiments::all();
        return view('frontoffice.pages.batiments', compact('batiments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebatimentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $batiments = new batiments;
        $batiments -> nom = $request -> nom ;
        $batiments -> description = $request -> description;
        $batiments -> save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_show = batiments::find($id);
        return view('backoffice.pages.backBatiments', compact('id_show'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = batiments::find($id);
        $destroy -> delete();
        return redirect()->back();
    }

    public function deleteAll(){
        $deleteAll = batiments::truncate();
        return redirect("/batiments");
    }
}
