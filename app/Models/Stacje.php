<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stacje extends Model
{
    use HasFactory;

    protected $table = 'stacje'; // Zmiana nazwy tabeli na 'stacje'

    protected $fillable = [
        'Nazwa',
        'l_peronow',
        'l_torow',
        
      
        
    ];
}
