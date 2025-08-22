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
        Schema::create('case_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_number');
            $table->string('type_case');
            $table->string('opening_date');
            $table->string('status_case');
            $table->string('description');
            $table->string('priority');

            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->integer('lawyer_id')->unsigned();
            $table->foreign('lawyer_id')->references('id')->on('lawyers')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_customers');
    }
};
