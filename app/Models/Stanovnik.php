<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Opstina;
use App\Models\Pas;

class Stanovnik extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'jmbg',
        'adresa',
        'broj_ljubimaca',
        'opstina_id',
    ];

    public function opstina()
    {
        return $this->belongsTo(Opstina::class);
    }

    public function psi()
    {
        return $this->hasMany(Pas::class);
    }
}
