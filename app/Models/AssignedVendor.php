<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedVendor extends Model
{
    use HasFactory;
    public $table = "assigned_vendor";

    protected $fillable = [
        'value', 
    ];
}
