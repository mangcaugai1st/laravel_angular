<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')
            ->insert
            ([
                [
                    'user_name' => 'admin',
                    'user_password' => Hash::make('123'),
                    'role' => 0,
                ],
                [
                    'user_name' => 'user1',
                    'user_password' => Hash::make('123'),
                    'role' => 1,
                ],
            ]);
    }
}
