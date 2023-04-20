<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequestController extends Controller
{
    use HasFactory;
    protected $table = 'requests';
    protected $primaryKey = 'id';
    protected $fillable = ['Firstname', 'Lastname','Img'];

    public function Customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
    public function Artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }
}
