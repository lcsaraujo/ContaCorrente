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
        Schema::create('debitos', function (Blueprint $table) {
            $table->id();
            $table->double("valorDebito", 10, 2);
            $table->string("descDebito", 254);
            $table->integer("user_id");
            $table->integer('fornecedores_id');
            $table->timestamps();
        });

        Schema::create('creditos', function (Blueprint $table) {
            $table->id();
            $table->double("valorCredito", 10, 2);
            $table->string("descCredito", 254);
            $table->integer("user_id");
            $table->integer('fornecedores_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debitos_creditos');
    }
};
