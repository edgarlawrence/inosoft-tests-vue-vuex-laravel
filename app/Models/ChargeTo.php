<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChargeTo extends Model
{
    use HasFactory;
    public $table = "chargeto";

    protected $fillable = [
        'value', 
    ];
}
