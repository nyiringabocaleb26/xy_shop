<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'id',
        'productCode',
        'productName',
        'image'
    ];

    public function productIn(){
        return $this->hasOne(productin::class);
    }

    public function productOut(){
        return $this->hasOne(productout::class);

    }
}
