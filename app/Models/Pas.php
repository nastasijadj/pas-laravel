<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stanovnik;

class Pas extends Model
{
    use HasFactory;

    protected $fillable = [
        'sifra',
        'rasa',
        'godine',
        'stanovnik_id',
    ];

    public function stanovnik()
    {
        return $this->belongsTo(Stanovnik::class);
    }
}
