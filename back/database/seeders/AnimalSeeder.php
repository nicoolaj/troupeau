<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            [
                'identifier' => '001',
                'name' => 'Fleur',
                'sex' => 'Female',
                'birth_date' => (new DateTime('2023-01-15'))->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'identifier' => '002',
                'name' => 'Hector',
                'sex' => 'Male',
                'birth_date' => (new DateTime('2022-06-20'))->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}