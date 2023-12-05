<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ['title_album', 'id_artist', 'album_banner', 'id_genre'];

    protected $table = 'albums';

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'id_artist');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'id_genre');
    }
    
    public function tracks()
    {
        return $this->hasMany(Track::class, 'id_album');
    }
}
