<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'Maria',
            'phone' => '654321098',
            'age' => 36,
            'password' => 'abcABC123',
            'email' => 'maria@gmail.com',
            'sex' => 'mujer'
        ]);

        DB::table('students')->insert([
            'name' => 'Jose',
            'phone' => '678901234',
            'age' => 35,
            'password' => '123ABCabc',
            'email' => 'jose@gmail.com',
            'sex' => 'hombre'
        ]);
    }
}
