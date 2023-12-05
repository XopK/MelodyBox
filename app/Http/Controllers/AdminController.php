<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $artist = Artist::all();
        dd($artist);
    }
}
