<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_routines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('translation_id');
            $table->integer('calories');
            $table->timestamps();

            $table->foreign('translation_id')
                ->references('id')->on('translations')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_routines');
    }
}
