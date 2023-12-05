<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class IndexController extends Controller
{
    public function index(){
        $genres = Genre::all();
        return view('index', ['genre' => $genres]);
    }
}
