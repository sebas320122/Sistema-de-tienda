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
        Schema::create('tickets_detalle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Ticket_id');
            $table->string('Producto');
            $table->tinyInteger('Cantidad');
            $table->mediumInteger('Subtotal');
            $table->string('Estado');
            $table->timestamps();

            // Establecer viculo con  'Tickets'
            $table->foreign('Ticket_id')->references('id')->on('tickets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets_detalle');
    }
};
