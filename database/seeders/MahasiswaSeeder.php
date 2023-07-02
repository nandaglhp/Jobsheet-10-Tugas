<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controllers\MahasiswaController;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create ([
            'Nim' => 1,
            'Nama' => 'Lee do hyun',
            'foto' => 'chimon.jpg',
            'kelas_id' => 4,
            'Jurusan' => 'Teknik Mesin',
        ]);
        Mahasiswa::create ([
            'Nim' => 2,
            'Nama' => 'Haechan',
            'foto' => 'leedd.png',
            'kelas_id' => 2,
            'Jurusan' => 'Teknik Mesin',
        ]);
    }
}
