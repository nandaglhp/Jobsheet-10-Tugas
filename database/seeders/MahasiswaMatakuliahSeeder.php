<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa_MataKuliah;

class MahasiswaMatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa_Matakuliah::create ([
            'mahasiswa_id' => 1,
            'matakuliah_id' => 1,
            'nilai' => 89,
        ]);
        Mahasiswa_Matakuliah::create ([
            'mahasiswa_id' => 1,
            'matakuliah_id' => 2,
            'nilai' => 89,
        ]);
        Mahasiswa_Matakuliah::create ([
            'mahasiswa_id' => 1,
            'matakuliah_id' => 3,
            'nilai' => 89,
        ]);
        Mahasiswa_Matakuliah::create ([
            'mahasiswa_id' => 1,
            'matakuliah_id' => 4,
            'nilai' => 89,
        ]);
        Mahasiswa_Matakuliah::create ([
            'mahasiswa_id' => 1,
            'matakuliah_id' => 2,
            'nilai' => 89,
        ]);

        Mahasiswa_Matakuliah::create ([
            'mahasiswa_id' => 2,
            'matakuliah_id' => 1,
            'nilai' => 89,
        ]);
        Mahasiswa_Matakuliah::create ([
            'mahasiswa_id' => 2,
            'matakuliah_id' => 2,
            'nilai' => 89,
        ]);
        Mahasiswa_Matakuliah::create ([
            'mahasiswa_id' => 2,
            'matakuliah_id' => 3,
            'nilai' => 89,
        ]);
        Mahasiswa_Matakuliah::create ([
            'mahasiswa_id' => 2,
            'matakuliah_id' => 4,
            'nilai' => 89,
        ]);
        Mahasiswa_Matakuliah::create ([
            'mahasiswa_id' => 2,
            'matakuliah_id' => 2,
            'nilai' => 89,
        ]);
    }
}
