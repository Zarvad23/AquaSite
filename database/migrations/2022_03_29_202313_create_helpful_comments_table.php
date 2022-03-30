<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpfulCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helpful_comments', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('helpful_id')->constrained();
            $table->string('date');
            $table->string('content');
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
        Schema::dropIfExists('helpful_comments');
    }
}
