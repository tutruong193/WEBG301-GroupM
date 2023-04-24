<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $artists = Artist::all(); // Truy vấn dữ liệu từ model Artist
        return view('adminArtist',[
            'title' => 'Trang quan tri administrator',
            'artists' => $artists // Truyền dữ liệu của model Artist vào view
        ]);
    }
    public function index2(){
        $artists = Artist::all(); // Truy vấn dữ liệu từ model Artist
        return view('home',[
            'artists' => $artists // Truyền dữ liệu của model Artist vào view
        ]);
    }
}
