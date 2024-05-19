<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Odcinek extends Model
{
    protected $table = 'odcinek';

    // Definicja relacji do modelu Trasy
    public function trasy()
    {
        return $this->belongsTo(Trasy::class, 'idTor', 'id');
    }
}