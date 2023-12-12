<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    protected $fillable = ['title_track', 'track', 'id_album'];

    protected $table = 'tracks';

    public $timestamps = false;

    public function album()
    {
        return $this->belongsTo(Album::class, 'id_album');
    }
}
