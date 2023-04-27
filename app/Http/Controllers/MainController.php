<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
   
    
    public function index(){
        $artists = Artist::all(); // Truy vấn dữ liệu từ model Artist
        $users = User::all(); //
        return view('home',[
            'artists' => $artists, // Truyền dữ liệu của model Artist vào view
            'users' => $users
        ]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function introduction()
    {
        return view('introduction');
    }
}
