<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('user')){
        Schema::create('user', function (Blueprint $table) {
            $table->id();              ;
            $table->string('user_id',30)           ->nullable(false)                   ;
            $table->tinyInteger('authority',2)          ->nullable(false)              ;
            $table->string('display_name',100)     ->nullable(false)                   ;
            $table->string('name',200)             ->nullable(false)                   ;
            $table->text('password')                ->nullable(false)                  ;
            $table->tinyInteger('user_status',2)        ->nullable(false)->default('1');
            $table->datetime('inserted_at')         ->nullable(false)                  ;
            $table->datetime('update_at')           ->default(null)                    ;
            $table->datetime('delete_at')           ->default(null)                    ;
        });
      }
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

//increments('id',10)->primary('id')->autoIncrement()->unique('id')

// CREATE TABLE user 
// (
// id  auto_increment primary key unique not null,
// user_id string(30) not null ,
// authority tinyint(2) not null,
// display_name string(100) not null,
// name string(200) not null,
// password text not null,
// user_status tinyint(2) not null default('1'),
// inserted_at datetime not null,
// updated_at default(null),
// deleted_at  default(null)
// ) ;
