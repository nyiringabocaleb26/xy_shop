<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopkeeper extends Model
{
    use HasFactory;

    protected $table = 'shopkeeper';

    protected $fillable = [
        'id',
        'Username',
        'Password',
    ];
}
