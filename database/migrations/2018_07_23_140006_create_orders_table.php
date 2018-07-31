<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('totall_price');
            $table->string('name', 191);
            $table->string('real_pay_price', 191);
            $table->string('merchant_pid', 191);
            $table->string('ali_shop_id', 191);
            $table->string('ali_user_id', 191);
            $table->tinyInteger('table_num_id');
            $table->tinyInteger('table_num');
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
        Schema::dropIfExists('orders');
    }
}
