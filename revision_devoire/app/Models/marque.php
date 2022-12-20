<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marque extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function voiture(){
        return $this->hasMany(voiture::class);
    }
}
