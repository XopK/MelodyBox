<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\User;
use App\Models\Album;
use App\Models\Track;
use App\Models\Genre;

class TrackController extends Controller
{
    public function showTrack($id_album)
    {
        $album = Album::find($id_album);
        $tracks = $album->tracks;

        return view('playlist', ['album' => $album, 'track' => $tracks]);
    }
}
