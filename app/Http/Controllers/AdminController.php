<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $artists = Artist::with('user')->get();
        return view('admin.index', ['artist' => $artists]);
    }
}
