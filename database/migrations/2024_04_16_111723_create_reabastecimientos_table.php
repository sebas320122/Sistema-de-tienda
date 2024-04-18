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
        Schema::create('reabastecimientos', function (Blueprint $table) {
            $table->id();
            $table->string('Proveedor');
            $table->smallInteger('Producto_id');
            $table->string('Descripcion');
            $table->smallInteger('Cantidad');
            $table->mediumInteger('Costo');
            $table->string('Estado');
            $table->date('Fecha_estimada');
            $table->date('Fecha_entrega')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reabastecimientos');
    }
};
