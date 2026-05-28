<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProgramOffline;
use App\Models\ProgramOnline;
use Illuminate\Support\Str;

class BIEPlusArabSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data lama Arab di bieplus
        ProgramOffline::where('kursus', 'bieplus')->where('program_bahasa', 'Arab')->delete();
        ProgramOnline::where('kursus', 'bieplus')->where('program_bahasa', 'Arab')->delete();

        $benefitCamp = [
            '6 kali pertemuan sehari (4 sesi kelas & 2 kegiatan asrama)',
            'Pengajar berpengalaman',
            'Metode bervariasi',
            "Program tambahan: Khithobah, Diroasah Jama'iyyah, Musyahadah, Fashl Khoriji",
        ];

        $benefitOnline = [
            '2x pertemuan 90 menit/hari',
            'Pengajar berpengalaman',
            'Metode bervariasi',
            'Program tambahan: Khithobah, Diroasah, Musyahadah, Munaqosyah',
        ];

        $programsOffline = [
            [
                'nama'         => "Muhadatsah I'dad",
                'lama_program' => '1 Bulan',
                'kategori'     => "Muhadatsah - 1 Bulan (Program + Camp)",
                'harga'        => 775000,
            ],
            [
                'nama'         => 'Muhadatsah Mustawa Awwal',
                'lama_program' => '1 Bulan',
                'kategori'     => 'Muhadatsah - 1 Bulan (Program + Camp)',
                'harga'        => 775000,
            ],
            [
                'nama'         => 'Muhadatsah Mustawa Tsani',
                'lama_program' => '1 Bulan',
                'kategori'     => 'Muhadatsah - 1 Bulan (Program + Camp)',
                'harga'        => 775000,
            ],
            [
                'nama'         => 'Muhadatsah Mustawa Tsalits',
                'lama_program' => '1 Bulan',
                'kategori'     => 'Muhadatsah - 1 Bulan (Program + Camp)',
                'harga'        => 775000,
            ],
            [
                'nama'         => 'Baca Kitab Tamhid',
                'lama_program' => '2 Pekan',
                'kategori'     => 'Baca Kitab - 2 Pekan (Program + Camp)',
                'harga'        => 475000,
            ],
            [
                'nama'         => 'Baca Kitab Muthawassith',
                'lama_program' => '2 Pekan',
                'kategori'     => 'Baca Kitab - 2 Pekan (Program + Camp)',
                'harga'        => 475000,
            ],
            [
                'nama'         => 'Baca Kitab Mutaqaddim',
                'lama_program' => '2 Pekan',
                'kategori'     => 'Baca Kitab - 2 Pekan (Program + Camp)',
                'harga'        => 475000,
            ],
            [
                'nama'         => 'Baca Kitab Tarjamah',
                'lama_program' => '2 Pekan',
                'kategori'     => 'Baca Kitab - 2 Pekan (Program + Camp)',
                'harga'        => 475000,
            ],
        ];

        foreach ($programsOffline as $data) {
            ProgramOffline::create([
                'nama'             => $data['nama'],
                'slug'             => Str::slug($data['nama']) . '-arab-bieplus',
                'program_bahasa'   => 'Arab',
                'lama_program'     => $data['lama_program'],
                'kategori'         => $data['kategori'],
                'harga'            => $data['harga'],
                'features_program' => json_encode(array_merge([$data['nama']], $benefitCamp)),
                'lokasi'           => 'Pare, Kediri',
                'kuota'            => 50,
                'is_active'        => 1,
                'kursus'           => 'bieplus',
                'thumbnail'        => null,
            ]);
        }

        $programsOnline = [
            [
                'nama'         => "Muhadatsah I'dad",
                'lama_program' => '1 Bulan',
                'kategori'     => 'Muhadatsah - 1 Bulan (Online non Camp)',
                'harga'        => 396000,
            ],
            [
                'nama'         => 'Muhadatsah Mustawa Awwal',
                'lama_program' => '1 Bulan',
                'kategori'     => 'Muhadatsah - 1 Bulan (Online non Camp)',
                'harga'        => 396000,
            ],
            [
                'nama'         => 'Muhadatsah Mustawa Tsani',
                'lama_program' => '1 Bulan',
                'kategori'     => 'Muhadatsah - 1 Bulan (Online non Camp)',
                'harga'        => 396000,
            ],
            [
                'nama'         => 'Muhadatsah Mustawa Tsalits',
                'lama_program' => '1 Bulan',
                'kategori'     => 'Muhadatsah - 1 Bulan (Online non Camp)',
                'harga'        => 396000,
            ],
            [
                'nama'         => 'Baca Kitab Tamhid',
                'lama_program' => '2 Pekan',
                'kategori'     => 'Baca Kitab - 2 Pekan (Online non Camp)',
                'harga'        => 189000,
            ],
            [
                'nama'         => 'Baca Kitab Muthawassith',
                'lama_program' => '2 Pekan',
                'kategori'     => 'Baca Kitab - 2 Pekan (Online non Camp)',
                'harga'        => 189000,
            ],
            [
                'nama'         => 'Baca Kitab Mutaqaddim',
                'lama_program' => '2 Pekan',
                'kategori'     => 'Baca Kitab - 2 Pekan (Online non Camp)',
                'harga'        => 189000,
            ],
            [
                'nama'         => 'Baca Kitab Tarjamah',
                'lama_program' => '2 Pekan',
                'kategori'     => 'Baca Kitab - 2 Pekan (Online non Camp)',
                'harga'        => 189000,
            ],
        ];

        foreach ($programsOnline as $program) {
            ProgramOnline::create([
                'nama'             => $program['nama'],
                'slug'             => Str::slug($program['nama']) . '-arab-bieplus',
                'program_bahasa'   => 'Arab',
                'lama_program'     => $program['lama_program'],
                'kategori'         => $program['kategori'],
                'harga'            => $program['harga'],
                'features_program' => json_encode(array_merge([$program['nama']], $benefitOnline)),
                'is_active'        => 1,
                'kursus'           => 'bieplus',
                'thumbnail'        => null,
            ]);
        }
    }
}
