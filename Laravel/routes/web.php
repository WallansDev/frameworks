<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', function () {
    return "Bienvenue à la Nouvelle Star !";
});

Route::get('/a-propos', function () {
    return "C'est la page à propos";
});

Route::get('/stars/sophie', function () {
    return "Page de la nouvelle star sophie ! ";
});

Route::get('/stars/{id}', function ($id) {
    return "Star numéro : $id";
});

Route::get('/star/{name}', function ($name) {
    return "Page de la nouvelle star $name !";
});

Route::get('/stars/{id?}', function ($id = null) {
    if ($id == NULL) {
        return "On est tous des stars !!!";
    } else {
        return "Star numéro : $id";
    }
});

Route::get('/testhtml', function () {
    return "<html><head><title>Nouvelle star</title></head><body><h1>La nouvelle star sophie</h1></body></html>";
});

Route::get('/ancien', function () {
    return redirect("/nouveau");
});

Route::get('/nouveau', function () {
    return "Nouvelle page !";
});

Route::get('/recherche', function () {
    return redirect("http://www.google.com");
});

Route::get('/secret', function () {
    $date = "Accès à la page";
    Log::notice("Notice test");
    Log::info("Info test");
    Log::debug("Debug test");
    Log::alert("Alert test");
    return "Page secrète !";
});
