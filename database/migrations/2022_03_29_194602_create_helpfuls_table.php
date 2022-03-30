<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpfulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helpfuls', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->foreignId('user_id')->constrained();
            $table->string('name');
            $table->string('summary');
            $table->string('date');
            $table->text('content');
            $table->integer('likes');
            $table->integer('views');
            $table->string('image');
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
        Schema::dropIfExists('helpfuls');
    }
}
