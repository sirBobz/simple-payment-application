<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('request_id')->nullable();
            $table->string('amount')->nullable();
            $table->string('third_party_trans_id')->nullable();
            $table->timestamp('transaction_time')->nullable();
            $table->string('account')->nullable();
            $table->string('account_name')->nullable();
            $table->string('paid_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('account_balance')->nullable();
            $table->string('result_code')->default(0);
            $table->string('result_desc')->nullable();
            $table->string('status')->default(0);
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
