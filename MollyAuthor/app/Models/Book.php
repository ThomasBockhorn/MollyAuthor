<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'genre',
        'description',
        'purchase_link',
        'purchase_second_link',
        'purchase_third_link',
        'cover',
    ];
}
