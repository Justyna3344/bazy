<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stacje extends Model
{
    protected $table = 'stacje';

    protected $fillable = [
        'Nazwa',
        'l_peronow',
        'l_torow',
    ];

    public function trasyPoczatkowe()
    {
        return $this->hasMany(Trasy::class, 'Stacja_poczatkowa', 'Nazwa');
    }

    public function trasyKoncowe()
    {
        return $this->hasMany(Trasy::class, 'Stacja_koncowa', 'Nazwa');
    }
}
