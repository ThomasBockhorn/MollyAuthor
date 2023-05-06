<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'genre',
        'description',
        'cover',
        'created_at',
        'updated_at'
    ];
}
