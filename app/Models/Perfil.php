<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfils';
    public $timestamps = false;

    public function usuaris()
    {
        return $this->hasMany(Usuari::class, 'perfils_id');
    }
}
