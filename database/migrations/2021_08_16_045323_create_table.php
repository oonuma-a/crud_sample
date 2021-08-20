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
            $table->id();
            $table->string('user_id',30)                              ;
            $table->tinyInteger('authority',2)                        ;
            $table->string('display_name',100)                        ;
            $table->string('name',200)                                ;
            $table->text('password')                                  ;
            $table->tinyInteger('user_status',2)    ->default('1')    ;
            $table->datetime('inserted_at')                           ;
            $table->datetime('update_at')           ->default(null)   ;
            $table->datetime('delete_at')           ->default(null)   ;
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