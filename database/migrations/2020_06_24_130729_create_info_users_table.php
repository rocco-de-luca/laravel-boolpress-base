<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_users', function (Blueprint $table) {
            //$table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('phone', 20);
            $table->string('address');
            $table->string('avatar');
            //$table->timestamps();

            // relation

            $table->foreign('user_id')
            ->references('id')
            ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_users');
    }
}
