<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Db::table('articles')->insert([
            [
                'title' => 'Pentingnya Konsultasi Kesehatan Online di Era Digital',
                'content' => 'Konsultasi kesehatan online telah menjadi solusi praktis bagi banyak orang untuk mendapatkan nasihat medis tanpa harus pergi ke klinik'
            ]
        ]);
    }
}
