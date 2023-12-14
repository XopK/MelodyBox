<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    protected $fillable = ['title_track', 'track', 'id_album', 'created_at', 'created_at'];

    protected $table = 'tracks';

    public function album()
    {
        return $this->belongsTo(Album::class, 'id_album');
    }

    public function playlists()
    {
        return $this->hasMany(Playlist::class, 'id_track');
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'id_artist');
    }
}
