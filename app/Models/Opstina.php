<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stanovnik;

class Opstina extends Model
{
    use HasFactory;

    public function stanovnici()
    {
        return $this->hasMany(Stanovnik::class);
    }
}
