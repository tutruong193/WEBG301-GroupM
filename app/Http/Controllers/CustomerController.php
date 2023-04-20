<?php

namespace App\Http\Controllers;

use App\Models\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CustomerController extends Controller
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    public function Request(): HasMany
    {
        return $this->hasMany(Request::class);
    }
}
