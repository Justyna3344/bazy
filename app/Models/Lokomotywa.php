<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokomotywa extends Model
{
    use HasFactory;

    protected $table = 'Lokomotywa';

    protected $fillable = [
        'Nazwa',
        'Rok_produkcji'
    ];

}
