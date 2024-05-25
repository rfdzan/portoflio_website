<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    function getMusic()
    {
        return DB::select("SELECT name, link, desc FROM music");
    }
    function getProgramming()
    {
        return DB::select("SELECT name, link, desc FROM programming");
    }
    function getArt()
    {
        return DB::select("SELECT name, link, desc FROM art");
    }
}
