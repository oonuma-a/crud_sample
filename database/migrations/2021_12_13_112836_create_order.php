<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id',10)->unique();
            $table->integer('order_number',false,false)->unsigned()->length(10);
            $table->integer('shop_id',false,false)->unsigned()->length(10);
            $table->integer('area1',false,false)->unsigned()->length(10);
            $table->integer('area2',false,false)->unsigned()->length(10);
            $table->char('zip_code',false,false)->length(7);
            $table->text('address');
            $table->char('tel1',false,false)->length(7);
            $table->char('tel2',false,false)->length(7);
            $table->char('tel3',false,false)->length(7);
            $table->integer('item1',false,false)->unsigned()->length(10);
            $table->integer('item2',false,false)->unsigned()->length(10)->default(null)->nullable();
            $table->integer('item3',false,false)->unsigned()->length(10)->default(null)->nullable();
            $table->integer('item4',false,false)->unsigned()->length(10)->default(null)->nullable();
            $table->integer('item1_num',false,false)->unsigned()->length(10);
            $table->integer('item2_num',false,false)->unsigned()->length(10)->default(null)->nullable();
            $table->integer('item3_num',false,false)->unsigned()->length(10)->default(null)->nullable();
            $table->integer('item4_num',false,false)->unsigned()->length(10)->default(null)->nullable();
            $table->text('Notices')->default(null)->nullable();
            $table->text('remarks')->default(null)->nullable();
            $table->integer('order_status',false,false)->unsigned()->length(2);
            $table->integer('user_id',false,false)->unsigned()->length(10);
            $table->timestamp('inserted_at')->userCurrent();
            $table->timestamp('updated_at')->userCurrent()->default(null)->nullable();
            $table->timestamp('deleted_at')->userCurrent()->default(null)->nullable();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}