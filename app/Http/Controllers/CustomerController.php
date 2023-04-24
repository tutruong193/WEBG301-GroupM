<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {   
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->password = $request->input('password');
        $customer->save();
        return redirect('/')->with('success', 'Registration completed. Please login.');
   }
   public function index()
    {
        return view('register');
    }
}
