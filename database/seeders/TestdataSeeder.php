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
        'user_id'=>'ken',
        'authority'=>'1',
        'display_name' =>'ken',
        'name' =>'ken',
        'password' =>'$2y$10$1I6hK7GKSAAlXw8l/ll7HeihFKDY44GxbDTM7.hAG65gJNUL2Qsf2',
        'user_status'=>'2',
        'inserted_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s'),
        'deleted_at'=>date('Y-m-d H:i:s'),
        ],
        ]);
    }
}
