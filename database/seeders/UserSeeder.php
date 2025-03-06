<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' =>'andres',
            //'lastname' =>'peres',
            'email' =>'andres@gmail.com',
            'password' =>PASSWORD_BCRYPT,
            'role' =>'admin',
            'status' =>true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' =>'carlos',
            //'lastname' =>'garcia',
            'email' =>'carlos@gmail.com',
            'password' =>PASSWORD_BCRYPT,
            'role' =>'user',
            'status' =>true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' =>'andrea',
            //'lastname' =>'anderson',
            'email' =>'andrea@gmail.com',
            'password' =>PASSWORD_BCRYPT,
            'role' =>'user',
            'status' =>false,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
