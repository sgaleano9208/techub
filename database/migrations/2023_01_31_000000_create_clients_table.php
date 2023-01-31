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
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('logo')->nullable();
            $table->string('name');
            $table
                ->string('email')
                ->nullable()
                ->unique();
            $table
                ->string('phone')
                ->nullable()
                ->unique();
            $table
                ->string('vat')
                ->nullable()
                ->unique();
            $table->string('origin')->nullable();
            $table->boolean('status')->default(0);
            $table->enum('type', ['small', 'medium', 'large']);
            $table->unsignedBigInteger('technician_id')->nullable();

            $table->index('name');
            $table->index('email');
            $table->index('phone');
            $table->index('vat');

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
        Schema::dropIfExists('clients');
    }
};
