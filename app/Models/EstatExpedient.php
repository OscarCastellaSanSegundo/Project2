<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatExpedient extends Model
{
    use HasFactory;

    protected $table = 'estats_expedients';
    public $timestamps = false;

    public function expedients()
    {
        return $this->hasMany(Expedient::class, 'estats_expedients_id');
    }
}
