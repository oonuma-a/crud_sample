<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop', function (Blueprint $table) {
            $table->increments('id',10)->unique();
            $table->integer('shop_number',false,false)->unsigned()->length(10);
            $table->integer('shop_name', false,false)->unsigned()->length(10);
            $table->text('password');
            $table->integer('area1',false,false)->unsigned()->length(10);
            $table->integer('area2',false,false)->unsigned()->length(10);
            $table->char('zip_code',false,false)->length(7);    
            $table->text('address');
            $table->string('tel',13);
            $table->integer('contract_status',false,false)->unsigned()->length(1)->default(1);
            $table->integer('item1',false,false)->unsigned()->length(10);
            $table->integer('item2',false,false)->unsigned()->length(10)->default(null)->nullable();
            $table->integer('item3',false,false)->unsigned()->length(10)->default(null)->nullable();
            $table->integer('item4',false,false)->unsigned()->length(10)->default(null)->nullable();
            $table->integer('item1_regular_flg',false,false)->unsigned()->length(1)->default(0);
            $table->integer('item2_regular_flg',false,false)->unsigned()->length(1)->default(0);
            $table->integer('item3_regular_flg',false,false)->unsigned()->length(1)->default(0);
            $table->integer('item4_regular_flg',false,false)->unsigned()->length(1)->default(0);
            $table->integer('item1_delivery_cycle',false,false)->unsigned()->length(2)->default(null)->nullable();
            $table->integer('item2_delivery_cycle',false,false)->unsigned()->length(2)->default(null)->nullable();
            $table->integer('item3_delivery_cycle',false,false)->unsigned()->length(2)->default(null)->nullable();
            $table->integer('item4_delivery_cycle',false,false)->unsigned()->length(2)->default(null)->nullable();
            $table->integer('item1_num',false,false)->unsigned()->length(10)->default(null)->nullable();
            $table->integer('item2_num',false,false)->unsigned()->length(10)->default(null)->nullable();
            $table->integer('item3_num',false,false)->unsigned()->length(10)->default(null)->nullable();
            $table->integer('item4_num',false,false)->unsigned()->length(10)->default(null)->nullable();
            $table->text('Notices')->default(null)->nullable();
            $table->text('remarks')->default(null)->nullable();
            $table->timestamp('inserted_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->default(null)->nullable();
            $table->timestamp('deleted_at')->useCurrent()->default(null)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop');
    }
}
