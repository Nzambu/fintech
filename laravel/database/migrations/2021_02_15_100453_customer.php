<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function(Blueprint $table) {
            $table->id();
            $table->bigInteger('cst_id')->unsigned()->unique();
            $table->foreign('cst_id', 'fk_customers_cst_id')->references('usr_id')->on('users')->onDelete('RESTRICT')->onUpdate('RESTRICT');
            $table->bigInteger('status_id')->unsigned();
            $table->foreign('status_id', 'fk_customers_status_id')->references('cst_id')->on('customer_status')->onDelete('RESTRICT')->onUpdate('RESTRICT');
            $table->bigInteger('group_id')->unsigned();
            $table->foreign('group_id', 'fk_customers_group_id')->references('cgr_id')->on('customer_groups')->onDelete('RESTRICT')->onUpdate('RESTRICT');
            $table->bigInteger('currency_id')->unsigned();
            $table->foreign('currency_id', 'fk_customers_currency_id')->references('crr_id')->on('currencies')->onDelete('RESTRICT')->onUpdate('RESTRICT');
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
        Schema::dropIfExists('customers');
    }
}
