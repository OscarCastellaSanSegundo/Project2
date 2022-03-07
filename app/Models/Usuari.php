<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuari extends Authenticatable
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
