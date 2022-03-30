<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->string('name');
            $table->string('term');
            $table->string('type');
            $table->string('species');
            $table->string('hydro');
            $table->string('date');
            $table->string('temp');
            $table->string('carbo');
            $table->string('oxygen');
            $table->text('content');
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
        Schema::dropIfExists('plants');
    }
}
