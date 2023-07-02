<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MataKuliah::create ([
             'nama_matkul' => 'Pemrograman Berbasis Objek',
             'sks' => 3,
             'jam' => 6,
             'semester' =>4,
            ]);
            MataKuliah::create ([
             'nama_matkul' => 'Pemrograman Web Lanjut',
             'sks' => 3,
             'jam' => 6,
             'semester' =>4,
            ]);
            MataKuliah::create ([
             'nama_matkul' => 'Basis Data Lanjut',
             'sks' => 3,
             'jam' => 4,
             'semester' =>4,
            ]);
            MataKuliah::create ([
             'nama_matkul' => 'Praktikum Basis Data Lanjut',
             'sks' => 3,
             'jam' => 6,
             'semester' =>4,
            ]);
    }
}
