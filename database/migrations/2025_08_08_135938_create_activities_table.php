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
        Schema::create('activities', function (Blueprint $table) {
                      $table->increments('id');
            $table->string('date_activity');
            $table->string('time');
            $table->string('name_activity');
            $table->string('description');
            $table->string('attached_documents');
            $table->string('type_activity');
            $table->string('place');
            $table->string('state');

            $table->integer('lawyer_id')->unsigned();
            $table->foreign('lawyer_id')->references('id')->on('lawyers')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->integer('reportmodule_id')->unsigned();
            $table->foreign('reportmodule_id')->references('id')->on('reportmodules')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
