<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    // use HasFactory;
    private $fillable =[
            'name',
            'prenom',
            'email',
            'email_verified_at',
            'password'

    ];



}
