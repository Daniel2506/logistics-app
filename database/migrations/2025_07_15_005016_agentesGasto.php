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
        Schema::create('agentesgasto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agente')->nullable();
            $table->string('descripcion')->nullable();
            $table->double('gastodestino')->default(0);

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
        Schema::dropIfExists('agentesgasto');
    }
};
