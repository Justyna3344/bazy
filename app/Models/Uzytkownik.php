<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uzytkownik extends Model
{
    public function bilety()
    {
        return $this->hasMany(Bilet::class);
    }
}
