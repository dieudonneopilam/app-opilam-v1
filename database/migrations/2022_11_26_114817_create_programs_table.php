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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('feeder_id')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete()
                    ->constrained();
            $table->foreignId('user_id')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete()
                  ->constrained();
            $table->dateTime('dateP');
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
        Schema::dropIfExists('programs');
    }
};
