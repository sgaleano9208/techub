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
        Schema::table('treatment_reports', function (Blueprint $table) {
            $table
                ->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('treatment_id')
                ->references('id')
                ->on('treatments')
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
        Schema::table('treatment_reports', function (Blueprint $table) {
            $table->dropForeign(['client_id']);
            $table->dropForeign(['treatment_id']);
        });
    }
};
