<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classe extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function etudiant(){

        return $this->hasMany(etudiant::class);
    }
}
