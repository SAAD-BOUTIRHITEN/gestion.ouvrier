<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cous extends Model
{
    use HasFactory;
    protected $fillable = [
        'produit',
        'Quantité',
        'Valeur',
        'user',
    ];
}