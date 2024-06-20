<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;

    protected $fillable = [
        'train_type', 
        'departure_station', 
        'arrival_station', 
        'departure_time', 
        'ticket_quantity', 
        'price'
    ];
}
