<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theatres extends Model
{
    use HasFactory;
    protected $fillable  = [
        'name','city','starttime','endtime','price','seatsAvailable','totalseat'
    ];
}
