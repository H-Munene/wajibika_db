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
        Schema::create('mda_projects_oag_audited', function (Blueprint $table) {
            $table->id();
            $table->string('mda_project_name');
            $table->foreignId('status_id')->constrained();
            $table->foreignId('state_department_id')->constrained();
            $table->foreignId('county_id')->constrained()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mda_projects');
    }
};
