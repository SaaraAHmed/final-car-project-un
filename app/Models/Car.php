<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory ,SoftDeletes;
    protected $fillable = [
        'name',
        'comment', 
        'luggage',
        'doors',
        'passenger',
        'price',
        'published',
        'image',
        'category_id',
       
    ];

    public function categry()
    {
        return $this->belongsTo(Categry::class);
    }
  

}
