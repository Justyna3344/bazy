<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relacje extends Model
{
    use HasFactory;

    protected $table = 'relacje';

    protected $primaryKey = 'idRelacje';

    protected $fillable = [
        'Nazwa', ];
}
public function trasy()
{
    return $this->hasMany(Trasy::class, 'cala_trasa_id');
}
?>