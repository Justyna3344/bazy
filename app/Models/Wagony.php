<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wagony extends Model
{
    use HasFactory;

    protected $table = 'Wagony';

    protected $fillable = [
        'Typ',
        'Klasa',
        'Miejsca'
    ];
}
