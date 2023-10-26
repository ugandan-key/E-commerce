<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function delivery(){
        return $this->hasOne(Delivery::class);
    }
    public function payment(){
        return $this->hasOne(Payment::class);
    }
    public function product(){
        return $this->belongsToMany(Product::class);
    }
}
