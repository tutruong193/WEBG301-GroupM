<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        return view('home', ['artists' => $artists]);
    }

    public function show(string $id)
    {
        $artist = Artist::find($id);
        // dd($car);
        return view('artistDetail', ['artist' => $artist]);
    }
}
