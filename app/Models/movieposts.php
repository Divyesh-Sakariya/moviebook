<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movieposts extends Model
{
    use HasFactory;
    protected $fillable = [
        't_id',
        'm_id'
    ];
}
