<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function(Blueprint $table) {
            $table->id('trn_id');
            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id', 'fk_transactions_type_id')->references('tty_id')->on('transaction_types')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->bigInteger('method_id')->unsigned();
            $table->foreign('method_id', 'fk_transactions_method_id')->references('tmt_id')->on('transaction_methods')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->bigInteger('sender')->unsigned();
            $table->foreign('sender', 'fk_transactions_sender')->references('cst_id')->on('customers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->bigInteger('beneficiary')->unsigned();
            $table->foreign('beneficiary', 'fk_transactions_beneficiary')->references('cst_id')->on('customers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->bigInteger('amount')->unsigned();
            $table->string('ref_no');
            $table->string('order_no');
            $table->bigInteger('status_id')->unsigned();
            $table->foreign('status_id', 'fk_transactions_status_id')->references('tst_id')->on('transaction_status')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
        Schema::dropIfExists('transactions');
    }
}
