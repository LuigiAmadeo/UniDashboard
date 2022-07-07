<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('files') -> insert([
            ['user_id' => 1, 'name' => 'Basic graph theory.pdf', 'public' => true],
            ['user_id' => 1, 'name' => 'Deterministic Finite Automata.pdf', 'public' => false]
        ]);
    }
}
