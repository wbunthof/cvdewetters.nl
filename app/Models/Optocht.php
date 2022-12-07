<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Optocht extends Model
{
    use HasFactory;

    protected $table = "optocht";

    protected $fillable = [
        'name',
        'telephone',
        'theme',
        'slogan',
        'category',
        'age',
    ];

}
