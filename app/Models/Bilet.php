<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilet extends Model
{
    use HasFactory;

    protected $table = 'bilety';
    protected $primaryKey = 'idBilety';
    protected $fillable = ['Cena', 'Przejazd_idPrzejazd', 'user_id'];

    public function uzytkownik()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
