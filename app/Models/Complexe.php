<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complexe extends Model
{
    use HasFactory;
    protected $fillable =[

        'ID',
        'Nom',
        'Description',
        'Date création',
        'photo',
        'Adresse',
       
        ];
        //tester
}
