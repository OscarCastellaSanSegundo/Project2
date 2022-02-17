<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipusIncident extends Model
{
    use HasFactory;

    protected $table = 'tipus_incidents';
    public $timestamps = false;
}
