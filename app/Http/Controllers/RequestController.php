<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationMail;

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
            $artistPrice = $request->input('artist_Price');
            $artist = Artist::find($artistId);
            // Thêm thông tin nghệ sĩ vào cơ sở dữ liệu
            $requestModel = new \App\Models\Request(); // Use fully qualified namespace for your custom Request model
            $requestModel->users_id = $user->id; // Thêm id của người dùng đã đăng nhập
            $requestModel->artists_id = $artistId;
            $requestModel->FirstName = $artistFisrtName;
            $requestModel->LastName = $artistLastName;
            $requestModel->Price = $artistPrice;
            $requestModel->save();
            
            // Chuyển hướng đến trang hiển thị danh sách nghệ sĩ
            return redirect('/home')->with('success', 'Artist added successfully.');
        } else {
            // User is not authenticated, handle accordingly (e.g. redirect to login page)
            return redirect('/login')->with('error', 'Please login to add artist.');
        }
    }
    public function index()
    {
        $requests = ModelsRequest::all();
        return view('adminRequest', ['requests' => $requests]);
    }
    public function destroy($id)
    {
        $request = ModelsRequest::find($id);
        $request->delete();
        return redirect('/admin/request')->with('success', 'request deleted successfully.');
    }
    public function sendEmail()
{
    $user = Auth::user(); // Lấy thông tin người dùng hiện tại
    $email = $user->email; // Lấy địa chỉ email của người dùng
    $data = [
        'name' => $user->name,
        'message' => 'Đây là nội dung email gửi từ Laravel.',
    ];

    Mail::to('truonganhtu190303@gmail.com')->send(new NotificationMail($data)); // Gửi email với dữ liệu và template đã tạo

    // Thông báo sau khi gửi email thành công
    return redirect()->back()->with('status', 'Gửi email thành công'); // Chuyển hướng về trang trước đó (adminartist) với thông báo thành công

}

}
