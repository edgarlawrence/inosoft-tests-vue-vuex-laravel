<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceTo extends Model
{
    use HasFactory;
    public $table = "invoice_to";

    protected $fillable = [
        'value', 
    ];
}
