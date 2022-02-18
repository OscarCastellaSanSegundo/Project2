<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    use HasFactory;

    protected $table = 'usuaris';
    public $timestamps = false;

    public function perfil()
    {
        return $this->belongsTo(Perfil::class, 'perfils_id');
    }

    public function cartesTrucades()
    {
        return $this->hasMany(CartaTrucada::class, 'usuaris_id');
    }
}
