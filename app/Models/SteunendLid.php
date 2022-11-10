<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SteunendLid extends Model
{
    use HasFactory;

    protected $table = 'steunend_leden';

    protected $fillable = [
        'firstname',
        'lastname',
        'emailadres',
        'phonenumber'
    ];
}
