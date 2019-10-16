<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppleNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('apple_notifications', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('type');
            $table->text('payload')->nullable();
            $table->text('exception')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('apple_notifications');
    }
}
