<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'menuitem_id',
        'unitprice',
        'amount', 
        'quantity',
    ];

    public function menuitem()
    {
        return $this->belongsTo(MenuItem::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }


}
