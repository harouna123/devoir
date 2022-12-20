<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voiture extends Model
{
    protected $guarded= [];
    use HasFactory;
    

    public function marque(){
        return $this->hasMany(marque::class);
    }
}
