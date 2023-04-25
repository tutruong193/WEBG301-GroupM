<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function store(Request $request)
    {   
        // Check if user is authenticated
        if (Auth::check()) {
            // User is authenticated, so we can access their information
            $user = Auth::user();
            
            // Lấy thông tin nghệ sĩ từ form
            $artistId = $request->input('artist_id');
            $artistFisrtName = $request->input('artist_FirstName');
            $artistLastName = $request->input('artist_LastName');
            $artistImg = $request->input('artist_Img');
            $artistPrice = $request->input('artist_Price');
            $artist = Artist::find($artistId);
            
            // Thêm thông tin nghệ sĩ vào cơ sở dữ liệu
            $requestModel = new \App\Models\Request(); // Use fully qualified namespace for your custom Request model
            $requestModel->users_id = $user->id; // Thêm id của người dùng đã đăng nhập
            $requestModel->artists_id = $artistId;
            $requestModel->FirstName = $artistFisrtName;
            $requestModel->LastName = $artistLastName;
            $requestModel->Price = $artistPrice;
            $requestModel->Img = $artistImg;
            $requestModel->save();
    
            // Chuyển hướng đến trang hiển thị danh sách nghệ sĩ
            return redirect('/home')->with('success', 'Artist added successfully.');
        } else {
            // User is not authenticated, handle accordingly (e.g. redirect to login page)
            return redirect('/login')->with('error', 'Please login to add artist.');
        }
    }
    


public function index(){
    
}

}
