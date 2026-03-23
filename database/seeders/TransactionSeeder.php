<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Db::table('transaction')->insert([
            [
                'user_id' => 1,
                'service_id' => 1,
                'doctor_id' => 1,
                'status' => 'completed',
            ]
        ]);
    }
}
