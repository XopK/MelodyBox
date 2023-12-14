<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Album;
use App\Models\Track;

class IndexController extends Controller
{
    public function index(){
        $genres = Genre::all();
        $albums = Album::all();

        $latestTracks = Track::latest()->with('album.artist')->take(6)->get();

        return view('index', ['genre' => $genres, 'album' => $albums, 'release' => $latestTracks]);
    }
}
