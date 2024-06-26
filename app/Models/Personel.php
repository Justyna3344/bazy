<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personel extends Model
{
    use HasFactory;

    protected $table = 'Personel';

    protected $fillable = [
        'Rola',
        'Imie',
        'Nazwisko',
        'Email',
        'NR_telefonu',
        'Miasto',
        'Ulica',
        'NR_domu',
        'Pesel'
    ];
}
