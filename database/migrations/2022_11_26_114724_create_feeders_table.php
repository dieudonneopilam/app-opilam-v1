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
        Schema::create('feeders', function (Blueprint $table) {
            $table->id();
            $table->mediumText('designation');
            $table->mediumText('ip');
            $table->integer('value');
            $table->mediumText('name');
            $table->mediumText('api');
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
        Schema::dropIfExists('feeders');
    }
};
