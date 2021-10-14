<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->increments('id',10)->unique();
            $table->integer('item_number',false,false)->unsigned();
            $table->string('item_name',2);
            $table->text('remarks',100)                  ->default(null)->nullable() ;
            $table->date('inserted_at',200)->useCurrent();
            $table->date('updated_at')     ->useCurrent()->default(null)->nullable() ;
            $table->date('deleted_at', 2)  ->useCurrent()->default(null)->nullable() ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item');
    }
}
