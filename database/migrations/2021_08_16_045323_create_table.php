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
            $table->increments('id', 10)                    ->unique()        ;
            $table->string('user_id',30)                                      ;
            $table->integer('authority',false,false)                          ;
            $table->string('display_name',100)                                ;
            $table->string('name',200)                                        ;
            $table->text('password')                                          ;
            $table->integer('user_status',false,false)      ->default('1')    ;
            $table->datetime('inserted_at')                                   ;
            $table->datetime('updated_at')                  ->default(null)   ;
            $table->datetime('deleted_at')                  ->default(null)   ;
        });
        
        Schema::create('item', function (Blueprint $table) {
            $table->increments('id',10)               ->unique();
            $table->integer('item_number',false,false)->unsigned();
            $table->string('item_name',2);
            $table->text('remarks',100)               ->nullable() ->default(null);
            $table->date('inserted_at',200);
            $table->date('updated_at')                ->nullable() ->default(null);
            $table->date('deleted_at', 2)             ->nullable() ->default(null);
            $table->dropPrimary('item_number');
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


// create table "user"(
//     "id"	INTEGER NOT NULL UNIQUE,
//     "user_id" varchar not null, 
//     "authority" integer not null, 
//     "display_name" varchar not null, 
//     "name" varchar not null, 
//     "password" text not null, 
//     "user_status" integer not null default '1',
//     "inserted_at" datetime not null, 
//     "update_at" datetime not null, 
//     "delete_at" datetime not null,
// 	PRIMARY KEY("id" AUTOINCREMENT)
// 	);