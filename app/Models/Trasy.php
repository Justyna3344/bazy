<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trasy extends Model
{
    use HasFactory;

    protected $table = 'Trasy';

    protected $fillable = [
        'Stacja_poczatkowa',
        'Stacja_koncowa',
        'Czas_podrozy',
        'Opoznienie',
        'Trasa_w_km',
        'cala_trasa_id',
        'Godzina_odjazdu',
        'Godzina_przyjazdu',
        
    ];
}
