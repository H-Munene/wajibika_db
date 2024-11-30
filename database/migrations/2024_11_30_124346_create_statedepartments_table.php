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
        Schema::create('statedepartments', function (Blueprint $table) {
            $table->id();
            $table->string('statedepartment_name');
            $table->double('cumulative_contracts_amount');
            $table->double('cumulative_amounts_paid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statedepartments');
    }
};
