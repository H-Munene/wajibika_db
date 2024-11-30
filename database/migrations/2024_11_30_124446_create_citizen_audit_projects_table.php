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
        Schema::create('citizen_audited_projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('amount_allocated');
            $table->string('amount_paid');
            $table->string('project_status');
            $table->foreignId('county_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citizen_audited_projects');
    }
};
