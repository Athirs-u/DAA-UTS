<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'product_name',
        'room_name',
        'aisle_name',
        'member_email',
        'member_phonenumber',
        'member_number',
        'price',
        'save_number',
        'total price',
        'product_quantity',
        'transaction_number',
        'date',
        'start_time',
        'end_time',
        'save_duration',
        'penalty_duration',
        'penalty'  
    ];
}
