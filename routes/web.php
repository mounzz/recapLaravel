<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ElevesController;
use App\Http\Controllers\BatimentsController;
use App\Http\Controllers\backElevesController;
use App\Http\Controllers\FormationsController;
use App\Http\Controllers\backBatimentController;
use App\Http\Controllers\backFormationsController;
use App\Http\Controllers\TypeformationsController;
use App\Http\Controllers\backTypesFormationsController;



//BATIMENTS
Route::get('/batiments', [BatimentsController::class, 'index'])->name('batiments');
Route::post('/create', [BatimentsController::class, 'store']);
Route::get("/batiments/{id}",[BatimentsController::class,"show"]);
Route::delete("/batiments/{id}/delete",[BatimentsController::class,"destroy"]);
Route::post("/batiments/deleteAll",[BatimentsController::class,"deleteAll"]);


//ELEVES

Route::get('/eleves', [ElevesController::class, 'index'])->name('eleves');
Route::post('/create', [ElevesController::class, 'store']);
Route::get('/eleves/{id}', [ElevesController::class, 'show']);
Route::delete('/eleves/{id}/delete', [ElevesController::class, 'destroy']);
Route::post("/eleves/deleteAll",[ElevesController::class,"deleteAll"]);

//FORMATIONS

Route::get('/formations', [FormationsController::class, 'index'])->name('formations');
Route::post('/create',[FormationsController::class, 'store']);
Route::get('/formations/{id}', [FormationsController::class, 'show']);
Route::delete('/formations/{id}/delete', [FormationsController::class, 'destroy']);
Route::post('/formations/deleteAll', [FormationsController::class, 'deleteAll']);

//TYPEFORMATIONS

Route::get('/typesformations', [TypeformationsController::class, 'index'])->name('typesformations');
Route::post('/create',[TypeformationsController::class, 'store']);
Route::get('/typesformations/{id}', [TypeformationsController::class, 'show']);
Route::delete('/typesformations/{id}/delete', [TypeformationsController::class, 'destroy']);
Route::post('/typesformations/deleteAll', [TypeformationsController::class, 'deleteAll']);


//HOME

Route::get('/home', [HomeController::class, 'index'])->name('home');



//BACK BATIMENT OFFICE

Route::put('/backBatiments/{id}/update', [backBatimentController::class, 'update']);

//BACK FORMATION OFFICE

Route::put('/backFormations/{id}/update', [backFormationsController::class, 'update']);


//BACK TYPE FORMATION OFFICE

Route::put('/backTypeFormations/{id}/update', [backTypesFormationsController::class, 'update']);


//BACK ELEVES OFFICE

Route::put('/backEleves/{id}/update', [backElevesController::class, 'update']);
