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
        Schema::table('crop_type_varieties', function (Blueprint $table) {
            $table
                ->foreign('crop_type_id')
                ->references('id')
                ->on('crop_types')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('crop_type_varieties', function (Blueprint $table) {
            $table->dropForeign(['crop_type_id']);
        });
    }
};
