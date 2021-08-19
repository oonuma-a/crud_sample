<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestdataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
        [
        'id'=>'1',
        'user_id'=>'1',
        'authority'=>'1',
        'display_name' =>'taro',
        'name' =>'ken',
        'password' =>'password',
        'user_status'=>'2',
        'inserted_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s'),
        'deleted_at'=>date('Y-m-d H:i:s'),
        ],
        ]);
    }
}
