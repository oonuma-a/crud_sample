<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id', 10)->unique()                            ;
            $table->string('user_id',30)                                      ;
            $table->integer('authority',false,false)                          ;
            $table->string('display_name',100)                                ;
            $table->string('name',200)                                        ;
            $table->text('password')                                          ;
            $table->integer('user_status',false,false)      ->default('1')    ;
            $table->datetime('inserted_at')   ->useCurrent()                  ;
            $table->datetime('updated_at')    ->useCurrent()->default(null)  ->nullable();
            $table->datetime('deleted_at')    ->useCurrent()->default(null)  ->nullable();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
