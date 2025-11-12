<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BellQ extends Model
{
    use HasFactory;

    protected $table = 'bells';
    protected $fillable = [
        'subject',
        'sound',
        'period',
    ];
}
