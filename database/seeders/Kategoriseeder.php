<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $kategoris = ['Teknologi', 'Bisnis', 'Kesehatan', 'Edukasi', 'Olahraga'];

        foreach ($kategoris as $kategori) {
            DB::table('kategoris')->insert([
                'nama' => $kategori,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
