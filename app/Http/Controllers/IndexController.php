<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Album;

class IndexController extends Controller
{
    public function index(){
        $genres = Genre::all();
        $albums = Album::all();
        return view('index', ['genre' => $genres, 'album' => $albums]);
    }
}
