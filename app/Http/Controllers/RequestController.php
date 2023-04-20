<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestController extends Controller
{
    use HasFactory;
    protected $table = 'artists';
    protected $primaryKey = 'id';
    protected $fillable = ['Firstname', 'Lastname', 'Description','Birthdate','Img'];
}
