<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    #mapear los atributos
    protected $fillable = [
        'phone_number'
    ];
    public function profile(){
        return $this->MorphTo(App\Models\User::class);
    }
    public function phoneable(){
        return $this->MorphTo();
    }
}
