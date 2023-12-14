<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\User;
use App\Models\Album;
use App\Models\Track;
use App\Models\Genre;
use App\Models\Playlist;
use Illuminate\Support\Facades\Auth;

class TrackController extends Controller
{
    public function showTrack($id_album)
    {
        $album = Album::find($id_album);
        $tracks = $album->tracks;
        $artist = $album->artist;
        return view('playlist', ['album' => $album, 'track' => $tracks, 'artist' => $artist]);
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
        $check = Auth::user()->artists->status_num;
        if ($check == 1) {
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
        }else{
            return redirect()->back()->with('error', 'Ошибка добавление!');
        }
    }

    public function LikeTrack()
    {
        $id_user = Auth::user()->id;
        $likes = Playlist::with(['track.album.artist', 'user'])->where('id_user', $id_user)->get();

        return view('like', ['liked' => $likes]);
    }

    public function addLike($like)
    {
        $id_user = Auth::user()->id;
        $existingLike = Playlist::where('id_user', $id_user)
            ->where('id_track', $like)
            ->first();

        if ($existingLike) {
            return redirect()->back()->with('error', 'Лайк уже существует');
        }

        $liked = Playlist::create([
            'id_user' => $id_user,
            'id_track' => $like,
        ]);

        return redirect()->back()->with('success', 'Лайк добавлен успешно');
    }

    public function genresShow($genre)
    {
        $tracksWithGenre = Track::with('album.artist')
            ->whereHas('album', function ($query) use ($genre) {
                $query->where('id_genre', $genre);
            })
            ->get();
        return view('genres', ['genre' => $tracksWithGenre]);
    }
}
