<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    /** @use HasFactory<\Database\Factories\CourFactory> */
    use HasFactory;

    protected $fillable = [
        "name",
    ];


    public function creneauxes(){
        return $this->hasMany(Creneaux::class);
    }

}
