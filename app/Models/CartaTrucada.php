<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartaTrucada extends Model
{
    use HasFactory;

    protected $table = 'cartes_trucades';
    public $timestamps = false;

    public function dadesPersonals()
    {
        return $this->belongsTo(DadesPersonals::class, 'dades_personals_id');
    }

    public function tipusLocalitzacio()
    {
        return $this->belongsTo(TipusLocalitzacio::class, 'tipus_localitzacions_id');
    }

    public function usuari()
    {
        return $this->belongsTo(Usuari::class, 'usuaris_id');
    }

    public function incident()
    {
        return $this->belongsTo(Incident::class, 'incidents_id');
    }

    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'provincies_id');
    }
}
