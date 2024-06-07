<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trasy extends Model
{
    protected $table = 'Trasy';

    protected $fillable = [
        'Stacja_poczatkowa',
        'Stacja_koncowa',
        'Czas_podrozy',
        'Opoznienie',
        'Trasa_w_km',
        'Godzina_odjazdu',
        'Godzina_przyjazdu',
        'cala_trasa_id',
    ];

    public function calaTrasa()
    {
        return $this->belongsTo(CalaTrasa::class, 'cala_trasa_id');
    }
}

