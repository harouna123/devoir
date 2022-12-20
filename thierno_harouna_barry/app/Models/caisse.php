<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caisse extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function etudiant(){

        return $this->hasMany(etudiant::class);
    }
}
