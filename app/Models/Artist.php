<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artist extends Model
{
    protected $fillable = ['id_user', 'artist_name', 'profile_img', 'banner_profile', 'label_email', 'status_num'];

    protected $table = 'artists';

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
