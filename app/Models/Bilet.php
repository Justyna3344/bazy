<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilet extends Model
{
    public function uzytkownik()
    {
        return $this->belongsTo(Uzytkownik::class);
    }
    protected $table = 'bilety';
    protected $primaryKey = 'idBilety';
}
