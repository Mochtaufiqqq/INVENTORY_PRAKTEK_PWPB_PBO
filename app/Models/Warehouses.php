<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouses extends Model
{
    use HasFactory;
    protected $table = 'warehouses';
    protected $fillable = ['name', 'total', 'brand', 'itemcondition', 'productcode' ];

}
