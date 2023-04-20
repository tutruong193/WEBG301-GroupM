<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $table = 'artists';
    protected $primaryKey = 'id';
    protected $fillable = ['Firstname', 'Lastname', 'Description','Birthdate','Img'];

    public function Request()
    {
        return $this->hasOne(Request::class);
    }
    
}
