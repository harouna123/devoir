<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function classe(){

        return $this->belongsTo(classe::class);
    }

    public function caisse(){

        return $this->belongsToMany(caisse::class);
    }
}
