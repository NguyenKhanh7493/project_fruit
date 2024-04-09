<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'unit',
        'price',
        'status',
    ];
    const KG    = 1;
    const PCS   = 2;
    const PACK  = 3;
    const UNIT = [
        self::KG    => 'Kg',
        self::PCS   => 'pcs',
        self::PACK  => 'Pack',
    ];
}
