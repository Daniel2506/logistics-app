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
        Schema::create('tarifario', function (Blueprint $table) {
            $table->id();
            $table->string('pol')->nullable();
            $table->string('pod')->nullable();
            $table->string('via')->nullable();
            $table->string('naviera')->nullable();
            $table->string('frecuencia')->nullable();
            $table->string('flete20')->nullable();
            $table->string('flete40st')->nullable();
            $table->string('flete40hc')->nullable();
            $table->string('documentacion')->nullable();
            $table->string('tch')->nullable();
            $table->string('bas')->nullable();
            $table->string('isps')->nullable();
            $table->string('otros')->nullable();
            $table->string('diaslibresdestino')->nullable();
            $table->string('tt')->nullable();
            $table->string('etd1')->nullable();
            $table->string('etd2')->nullable();
            $table->string('etd3')->nullable();
            $table->unsignedBigInteger('agente')->nullable();
            $table->boolean('activo')->default(true);

            $table->timestamps();

            $table->foreign('agente')->references('id')->on('agentes')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarifario');
    }
};
