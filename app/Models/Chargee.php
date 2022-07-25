<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chargee extends Model
{
    use HasFactory;
    
    protected $table    = 'charge';

    protected $fillable = [
        'payment_id',
        'payer_email',
        'amount',
        'currency',
        'payment_status',
        'token'
      ];
}
