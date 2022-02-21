<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipi extends Model
{
    use HasFactory;

    protected $table = 'municipis';
    public $timestamps = false;

    public function comarca()
    {
        return $this->belongsTo(Comarca::class, 'comarques_id');
    }

    public function cartesTrucada()
    {
        return $this->hasMany(CartaTrucada::class, 'municipis_id');
    }

    public function cartesTrucadaTrucada()
    {
        return $this->hasMany(CartaTrucada::class, 'municipis_id_trucada');
    }

    public function agencies()
    {
        return $this->hasMany(Agencia::class, 'municipis_id');
    }

}
