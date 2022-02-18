<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $table = 'incidents';
    public $timestamps = false;

    public function tipusIncident()
    {
        return $this->belongsTo(TipusIncident::class, 'classes_incidents_id');
    }

    public function cartesTrucada()
    {
        return $this->hasMany(CartaTrucada::class, 'expedients_id');
    }
}
