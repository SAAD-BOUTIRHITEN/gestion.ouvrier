<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farine extends Model
{
    use HasFactory;
    protected $fillable = [
        'produit',
        'Quantité',
        'Valeur',
        'user',
    ];
}