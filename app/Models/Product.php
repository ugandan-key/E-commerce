<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function seller(){
        return $this->belongsTo(Seller::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function version(){
        return $this->belongsToMany(Version::class)->withTimestamps();
    }
    public function stock(){
        return $this->hasOne(Stock::class);
    }
    public function price(){
        return $this->hasOne(Price::class);
    }
    public function order(){
        return $this->belongsToMany(Order::class);
    }
}
