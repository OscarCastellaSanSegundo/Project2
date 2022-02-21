<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    use HasFactory;

    protected $table = 'agencies';
    public $timestamps = false;

    public function municipi()
    {
        return $this->belongsTo(Municipi::class, 'municipis_id');
    }

    public function cartesTrucadesHasAgencia()
    {
        return $this->hasMany(cartesTrucadesHasAgencies::class, 'agencies_id');
    }
}
