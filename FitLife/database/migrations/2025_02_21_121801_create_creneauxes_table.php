<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('creneauxes', function (Blueprint $table) {
            $table->id();
            $table->integer('nb_place');
            $table->date('date_creneaux');
            $table->time('hour_creneaux');
            $table->foreignIdFor(\App\Models\Cour::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('creneaux_user', function (Blueprint $table) {
            $table->id();
            $table->date('creneaux_user_date'); 
            $table->foreignIdFor(\App\Models\Creneaux::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\User::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::dropIfExists('creneaux_user');
        Schema::dropIfExists('creneauxes');
       
    }
};
