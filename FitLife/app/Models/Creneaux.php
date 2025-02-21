<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creneaux extends Model
{
    /** @use HasFactory<\Database\Factories\CreneauxFactory> */
    use HasFactory;

    protected $fillable = [
        "nb_place",
        "date_creneaux",
        "hour_creneaux",
    ];

    public function cour(){
        return $this->belongsTo(Cour::class);
    }
}
