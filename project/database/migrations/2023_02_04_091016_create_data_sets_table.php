<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_sets', function (Blueprint $table) {
            $table->id();
            $table->string('image_name')->nullable();
            $table->string('URL')->nullable();
            $table->string('ml_service_name')->nullable();
            $table->string('document_type')->nullable();
            $table->date('created_date')->nullable();
            $table->string('project')->nullable();
            $table->string('dataset_version')->nullable();
            $table->string('tag')->nullable();
            $table->string('laminated')->nullable();
            $table->string('background')->nullable();
            $table->string('card')->nullable();
            $table->string('handwritten')->nullable();
            $table->string('hologram')->nullable();
            $table->string('gender')->nullable();
            $table->string('device')->nullable();
            $table->string('onsite')->nullable();
            $table->string('training')->nullable();
            $table->string('device_model')->nullable();
            $table->string('angle')->nullable();
            $table->string('update_row')->nullable();
            $table->string('encrypted_id')->nullable();
            $table->boolean('is_processed')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_sets');
    }
};
