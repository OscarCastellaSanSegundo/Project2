<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatAgencia extends Model
{
    use HasFactory;

    protected $table = 'estats_agencies';
    public $timestamps = false;
}
