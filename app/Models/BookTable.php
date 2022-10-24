<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTable extends Model
{
    use HasFactory;
    protected $fillable =[
        'people',
        'date',
        'time',
        'seatingType',
        'firstName',
        'lastName',
        'phone',
        'email',
        'occasion',
        'request',
        'action',
    ];
}
