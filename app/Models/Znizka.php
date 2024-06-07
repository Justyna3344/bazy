<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Znizka extends Model
{
    use HasFactory;

    protected $table = 'znizki'; // Nazwa tabeli, do której ten model się odnosi

    protected $fillable = ['nazwa', 'typ', 'wartosc_procentowa']; // Pola, które można masowo przypisywać

    // Reszta modelu: relacje, metody itp.
}
