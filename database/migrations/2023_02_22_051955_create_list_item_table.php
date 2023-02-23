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
        Schema::create('list_item', function (Blueprint $table) {
            $table->id('list_id');
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('user_id')->on('user');
            $table->string('content');
            $table->integer('is_complete');
            
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
        Schema::dropIfExists('list_item');
    }
};
