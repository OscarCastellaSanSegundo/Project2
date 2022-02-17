<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carta_trucada extends Model
{
    use HasFactory;

    protected $table = 'cartes_trucades';
    public $timestamps = false;
}
