<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = [
    //     'image',
    //     'name',
    //     'price',
    //     'luggage',
    //     'doors',
    //     'passenger',
    //     'comment',  
    ];

   
}