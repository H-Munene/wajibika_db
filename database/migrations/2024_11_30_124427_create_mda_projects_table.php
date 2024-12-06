<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mda_projects', function (Blueprint $table) {
            $table->id();
            $table->string('mda_project_name');
            $table->foreignId('status_id');
            $table->foreignId('statedepartment_id')->constrained();
            $table->foreignId('county_id')->constrained();
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
