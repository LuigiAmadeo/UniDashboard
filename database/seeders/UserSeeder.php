<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') -> insert([
            ['name' => 'Faiz Arsalan', 'email' => 'wow@wow.com', 'password' => '$2y$10$02qLmZ61byd.mvXSoa3Hy.CZ8gbbyIFz4337KQKaNcvqv23gKIL1O']
        ]);
    }
}
