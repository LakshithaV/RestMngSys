<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'foodname',
        'status',
        'price',
        'description',
        'category',
        'image',
        'quantity',
        'alert_stock',
    ];

    public function orderdetail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
