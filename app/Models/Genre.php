<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['title_genre'];

    protected $table = 'genres';

    public $timestamps = false;

    public function albums()
    {
        return $this->hasMany(Album::class, 'id_genre');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
