<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function UserRelation(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}
