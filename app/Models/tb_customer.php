<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'customerName'
    ];
}
