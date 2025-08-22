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
        Schema::create('evidence_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_evidence');
            $table->string('description');
            $table->string('registration_date');
            $table->string('state_evidence');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evidence_sections');
    }
};
