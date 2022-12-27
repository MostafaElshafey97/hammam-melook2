<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSittingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sittings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address1');
            $table->string('address2');
            $table->string('email1');
            $table->string('email12');
            $table->string('phone_one');
            $table->string('phone_two');
            $table->string('phone_three');
            $table->string('phone_four');
            $table->string('facebook');
            $table->string('youtube');
            $table->string('instagram');
            $table->string('twitter');
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
        Schema::dropIfExists('sittings');
    }
}
