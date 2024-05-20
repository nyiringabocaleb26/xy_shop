<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOut extends Model
{
    use HasFactory;
    protected $table = 'productout';
    protected $fillable = [
        'id',
        'product_id',
        'DateTime',
        'Quantity',
        'UnitPrice',
        'TotalPrice',
        'image'
    ];

    public function product(){
        return $this->belongsTo(product::class);
    }
}
