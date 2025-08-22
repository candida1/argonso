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
        Schema::create('report_modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('assigned_attomey');
            $table->string('status_case');
            $table->string('date_writting');
            $table->string('type_report');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_modules');
    }
};
