<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Données extends Model
{
    use HasFactory;
    protected $fillable =[

        'ID',
        'Intitule',
        'valeur',
        'Date',
        
       
        ];
}
