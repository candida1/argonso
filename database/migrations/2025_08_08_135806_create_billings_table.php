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
        Schema::create('billings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('issue_date');
            $table->string('expiration_date');
            $table->string('total_amount');
            $table->string('payment_status');
            $table->string('payment_method');
            $table->string('invoice_number');

            $table->integer('case_id')->unsigned();
            $table->foreign('case_id')->references('id')->on('case_customers')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billings');
    }
};
