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
        
        Schema::create('appoints', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number');
            $table->string('email')->nullable();
            $table->string('topic')->nullable();
            $table->date('app_date')->nullable();
            $table->time('app_time')->nullable();

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
        Schema::dropIfExists('appoints');
    }
};
