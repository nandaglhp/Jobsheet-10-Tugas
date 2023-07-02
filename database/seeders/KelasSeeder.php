<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create ([
            'nama_kelas' => 'TI 2A',
        ]);
        Kelas::create ([
            'nama_kelas' => 'TI 2B',
        ]);
        Kelas::create ([
            'nama_kelas' => 'TI 2C',
        ]);
        Kelas::create ([
            'nama_kelas' => 'TI 2D',
        ]);
        Kelas::create ([
            'nama_kelas' => 'TI 2E',
        ]);
        Kelas::create ([
            'nama_kelas' => 'TI 2F',
        ]);
        Kelas::create ([
            'nama_kelas' => 'TI 2G',
        ]);
        Kelas::create ([
            'nama_kelas' => 'TI 2H',
        ]);
        Kelas::create ([
            'nama_kelas' => 'TI 2I',
        ]);
    }
}
