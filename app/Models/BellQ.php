<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BellQ extends Model
{
    use HasFactory;

    protected $table = 'bell_qs';
    protected $fillable = [
    'subject',
    'sound',
    'start_time',
    'end_time',
];

}
