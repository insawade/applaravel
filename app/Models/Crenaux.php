<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crenaux extends Model
{
    use HasFactory;
    protected $fillable =[

        'ID',
        'Date',
        'horaire',
        ];
}
