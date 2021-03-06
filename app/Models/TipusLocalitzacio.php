<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipusLocalitzacio extends Model
{
    use HasFactory;

    protected $table = 'tipus_localitzacions';
    public $timestamps = false;

    public function cartesTrucades()
    {
        return $this->hasMany(CartaTrucada::class, 'tipus_localitzacions_id');
    }
}
