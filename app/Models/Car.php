<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function CarRelation(){
        return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function bookings()
    {
        return $this->hasMany(Book::class);
    }
}
