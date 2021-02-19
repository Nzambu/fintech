<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('usr_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('id_number')->unique();
            $table->boolean('system_user')->default(0);
            $table->bigInteger('gender_id')->unsigned();
            $table->foreign('gender_id', 'fk_users_gender_id')->references('gnd_id')->on('gender')->onDelete('RESTRICT')->onUpdate('RESTRICT');
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
