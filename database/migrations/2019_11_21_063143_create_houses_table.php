<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('township_id');
            $table->unsignedBigInteger('type_id');
            $table->string('title');
            $table->string('area');
            $table->decimal('price',10,2);
            $table->string('room');
            $table->string('street');
            $table->string('hno');
            $table->string('image',80);
            $table->string('phone')->unique();
            $table->boolean('status')->default(false);
            $table->text('description');

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
        Schema::dropIfExists('houses');
    }
}
