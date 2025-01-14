<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;

    protected $table = 'goods';
    protected $fillable = ['name', 'stock', 'brand', 'productcode' ];

    public function loans(){
        return $this->hasMany(Loans::class);
    }
}
