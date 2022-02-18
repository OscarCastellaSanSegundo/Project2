<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'provinciess';
    public $timestamps = false;

    public function comarques()
    {
        return $this->hasMany(Comarca::class, 'provincies_id');
    }

    public function cartesTrucada()
    {
        return $this->hasMany(CartaTrucada::class, 'provincies_id');
    }
}
