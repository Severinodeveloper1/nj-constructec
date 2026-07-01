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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('claim_number')->unique();
            $table->string('full_name');
            $table->string('document_type', 20);
            $table->string('document_number', 20);
            $table->string('email');
            $table->string('phone', 30);
            $table->string('address');
            $table->string('department')->nullable();
            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->enum('client_type', [
                'Titular',
                'Representante'
            ])->default('Titular');
            $table->enum('claim_type', [
                'Reclamo',
                'Queja'
            ]);
            $table->enum('good_type', [
                'Producto',
                'Servicio'
            ]);
            $table->string('good_description');
            $table->decimal('claimed_amount', 10, 2)->nullable();
            $table->text('incident_description');
            $table->text('request');
            $table->enum('status', [
                'Pendiente',
                'En proceso',
                'Respondido',
                'Cerrado'
            ])->default('Pendiente');
            $table->text('response')->nullable();
            $table->timestamp('responded_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
