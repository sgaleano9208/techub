<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatment_passes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('treatment_id');
            $table->string('name');
            $table->date('date');
            $table->enum('status', ['pendiente', 'realizado']);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treatment_passes');
    }
};
