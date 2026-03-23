<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Db::table('doctors')->insert([
            [
                'name' => 'Dr. John Doe',
                'specialization' => 'General Practitioner',
                'contact_info' => 'dr.johndoe@example.com'
            ]
        ]);
    }
}
