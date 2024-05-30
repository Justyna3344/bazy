<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalaTrasa extends Model
{
    use HasFactory;

    protected $table = 'cala_trasa';

    protected $fillable = [
        'Czas_podrozy',
        'Trasy',
        'Trasa_w_km',
        'Modyfikacja_trasy',
    ];

    public function trasy()
    {
        return $this->hasMany(Trasy::class, 'cala_trasa_id');
    }
}
