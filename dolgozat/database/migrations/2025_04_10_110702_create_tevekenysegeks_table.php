<?php

use App\Models\Tevekenysegek;
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
        Schema::create('tevekenysegeks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kat_id')->references('katnev')->on('kategoriak');
            $table->string('tev_nev');
            $table->boolean('allapot');
            $table->timestamps();

           
        });
        Tevekenysegek::create(['kat_id'=>'1', 'tev_nev'=>"főzés", 'allapot'=>true]);
        Tevekenysegek::create(['kat_id'=>'2', 'tev_nev'=>"tanulás", 'allapot'=>true]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tevekenysegeks');
    }
};
