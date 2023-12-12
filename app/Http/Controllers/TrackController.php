<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\User;
use App\Models\Album;
use App\Models\Track;
use App\Models\Genre;
use Illuminate\Support\Facades\Auth;

class TrackController extends Controller
{
    public function showTrack($id_album)
    {
        $album = Album::find($id_album);
        $tracks = $album->tracks;

        return view('playlist', ['album' => $album, 'track' => $tracks]);
    }

    public function addTracks(Request $request)
    {
        // $request->validate([
        //     'title_album' => 'required',
        //     'cover' => 'required|mimes:png,jpg,jpeg',
        //     'tracks' => 'required|mimes:mp3',
        //     'genre' => 'required',
        // ], [
        //     'title_album.required' => 'Поле обязательно для заполнения!',
        //     'cover.required' => 'Поле обязательно для заполнения!',
        //     'cover.mimes' => 'Файлы должны иметь нужное расширение! (png,jpg,jpeg)',
        //     'tracks.required' => 'Поле обязательно для заполнения!',
        //     'tracks.mimes' => 'Файлы должны иметь нужное расширение! (mp3)',
        //     'genre.required' => 'Поле обязательно для заполнения!',
        // ]);

        $album_data = $request->all();
        $genreTitle = $album_data['genre'];
        $existingGenre = Genre::where('title_genre', $genreTitle)->first();

        if ($existingGenre) {
            $id_genre = $existingGenre->id;
        } else {
            $createdGenre = Genre::create([
                'title_genre' => $genreTitle,
            ]);
            $id_genre = $createdGenre->id;
        }

        $id_user = Auth::user()->id;
        $name_cover = $request->file('cover')->hashName();
        $path_cover = $request->file('cover')->store('public/albums');
        $album_id = Album::create([
            'title_album' => $album_data['title_album'],
            'id_artist' => $id_user,
            'album_banner' => $name_cover,
            'id_genre' => $id_genre,
        ]);

        $tracks = $request->file('tracks');

        foreach ($tracks as $track) {
            $tracks_name = pathinfo($track->getClientOriginalName(), PATHINFO_FILENAME);
            $tracks_hash = $track->hashName();
            $path_track = $track->store('public/tracks');
            Track::create([
                'title_track' => $tracks_name,
                'track' => $tracks_hash,
                'id_album' => $album_id->id,
            ]);
        }
        return redirect('/')->with('succes', 'Трек добавлен!');
    }
}
