<?php

use App\Http\Controllers\DBController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $dbController = new DBController();
    // $art = $dbController->getArt();
    $music = $dbController->getMusic();
    // $programming = $dbController->getProgramming();
    return view("homepage", ["musicArray" => $music]);
});
