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
        Schema::create('Municipio', function (Blueprint $table) {
            $table->int('id')->primary();
            $table->string('name', 45)->nullable();
            $table->foreignId('Departamentos_id')->nullable()->index();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
