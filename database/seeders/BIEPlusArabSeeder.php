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
            '6 kali pertemuan sehari, 4 sesi kelas dan 2 kegiatan asrama',
            'Dibimbing pengajar berpengalaman dan kompeten',
            'Metode belajar bervariasi dan menarik di setiap pertemuan',
            "Program tambahan: Khithobah, Diroasah Jama\'iyyah, Musyahadah, dan Fashl Khoriji",
        ];

        $benefitOnline = [
            '2x pertemuan 90 menit per hari',
            'Dibimbing pengajar berpengalaman dan kompeten',
            'Metode belajar bervariasi dan menarik di setiap pertemuan',
            'Program tambahan: Khithobah, Diroasah, Musyahadah, dan Munaqosyah',
        ];

        $programsOffline = [
            [
                'nama'             => "Muhadatsah I'dad (Basic) - 1 Bulan Program + Camp",
                'lama_program'     => '1 Bulan',
                'kategori'         => 'Muhadatsah - 1 Bulan (Program + Camp)',
                'harga'            => 775000,
                'jadwal_mulai'     => '2025-09-08',
                'jadwal_selesai'   => '2025-09-30',
                'features_program' => json_encode(array_merge(["Program Muhadatsah: I'dad (basic)"], $benefitCamp)),
            ],
            [
                'nama'             => 'Muhadatsah Mustawa Awwal - 1 Bulan Program + Camp',
                'lama_program'     => '1 Bulan',
                'kategori'         => 'Muhadatsah - 1 Bulan (Program + Camp)',
                'harga'            => 775000,
                'jadwal_mulai'     => '2025-09-08',
                'jadwal_selesai'   => '2025-09-30',
                'features_program' => json_encode(array_merge(['Program Muhadatsah: Mustawa Awwal'], $benefitCamp)),
            ],
            [
                'nama'             => 'Muhadatsah Mustawa Tsani - 1 Bulan Program + Camp',
                'lama_program'     => '1 Bulan',
                'kategori'         => 'Muhadatsah - 1 Bulan (Program + Camp)',
                'harga'            => 775000,
                'jadwal_mulai'     => '2025-09-08',
                'jadwal_selesai'   => '2025-09-30',
                'features_program' => json_encode(array_merge(['Program Muhadatsah: Mustawa Tsani'], $benefitCamp)),
            ],
            [
                'nama'             => 'Muhadatsah Mustawa Tsalits - 1 Bulan Program + Camp',
                'lama_program'     => '1 Bulan',
                'kategori'         => 'Muhadatsah - 1 Bulan (Program + Camp)',
                'harga'            => 775000,
                'jadwal_mulai'     => '2025-09-08',
                'jadwal_selesai'   => '2025-09-30',
                'features_program' => json_encode(array_merge(['Program Muhadatsah: Mustawa Tsalits'], $benefitCamp)),
            ],
            [
                'nama'             => 'Baca Kitab Tamhid - 2 Pekan Program + Camp',
                'lama_program'     => '2 Pekan',
                'kategori'         => 'Baca Kitab - 2 Pekan (Program + Camp)',
                'harga'            => 475000,
                'jadwal_mulai'     => '2025-09-08',
                'jadwal_selesai'   => '2025-09-21',
                'features_program' => json_encode(array_merge(['Program Baca Kitab: Tamhid'], $benefitCamp)),
            ],
            [
                'nama'             => 'Baca Kitab Muthawassith - 2 Pekan Program + Camp',
                'lama_program'     => '2 Pekan',
                'kategori'         => 'Baca Kitab - 2 Pekan (Program + Camp)',
                'harga'            => 475000,
                'jadwal_mulai'     => '2025-09-08',
                'jadwal_selesai'   => '2025-09-21',
                'features_program' => json_encode(array_merge(['Program Baca Kitab: Muthawassith'], $benefitCamp)),
            ],
            [
                'nama'             => 'Baca Kitab Mutaqaddim - 2 Pekan Program + Camp',
                'lama_program'     => '2 Pekan',
                'kategori'         => 'Baca Kitab - 2 Pekan (Program + Camp)',
                'harga'            => 475000,
                'jadwal_mulai'     => '2025-09-08',
                'jadwal_selesai'   => '2025-09-21',
                'features_program' => json_encode(array_merge(['Program Baca Kitab: Mutaqaddim'], $benefitCamp)),
            ],
            [
                'nama'             => 'Baca Kitab Tarjamah - 2 Pekan Program + Camp',
                'lama_program'     => '2 Pekan',
                'kategori'         => 'Baca Kitab - 2 Pekan (Program + Camp)',
                'harga'            => 475000,
                'jadwal_mulai'     => '2025-09-08',
                'jadwal_selesai'   => '2025-09-21',
                'features_program' => json_encode(array_merge(['Program Baca Kitab: Tarjamah'], $benefitCamp)),
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
                'features_program' => $data['features_program'],
                'jadwal_mulai'     => $data['jadwal_mulai'],
                'jadwal_selesai'   => $data['jadwal_selesai'],
                'lokasi'           => 'Pare, Kediri',
                'kuota'            => 50,
                'is_active'        => 1,
                'kursus'           => 'bieplus',
                'thumbnail'        => null,
            ]);
        }

        $programsOnline = [
            [
                'nama'             => "Muhadatsah I'dad (Basic) - 1 Bulan Online Non Camp",
                'lama_program'     => '1 Bulan',
                'kategori'         => 'Muhadatsah - 1 Bulan (Online non Camp)',
                'harga'            => 396000,
                'features_program' => json_encode(array_merge(["Program Muhadatsah: I'dad (basic)"], $benefitOnline)),
            ],
            [
                'nama'             => 'Muhadatsah Mustawa Awwal - 1 Bulan Online Non Camp',
                'lama_program'     => '1 Bulan',
                'kategori'         => 'Muhadatsah - 1 Bulan (Online non Camp)',
                'harga'            => 396000,
                'features_program' => json_encode(array_merge(['Program Muhadatsah: Mustawa Awwal'], $benefitOnline)),
            ],
            [
                'nama'             => 'Muhadatsah Mustawa Tsani - 1 Bulan Online Non Camp',
                'lama_program'     => '1 Bulan',
                'kategori'         => 'Muhadatsah - 1 Bulan (Online non Camp)',
                'harga'            => 396000,
                'features_program' => json_encode(array_merge(['Program Muhadatsah: Mustawa Tsani'], $benefitOnline)),
            ],
            [
                'nama'             => 'Muhadatsah Mustawa Tsalits - 1 Bulan Online Non Camp',
                'lama_program'     => '1 Bulan',
                'kategori'         => 'Muhadatsah - 1 Bulan (Online non Camp)',
                'harga'            => 396000,
                'features_program' => json_encode(array_merge(['Program Muhadatsah: Mustawa Tsalits'], $benefitOnline)),
            ],
            [
                'nama'             => 'Baca Kitab Tamhid - 2 Pekan Online Non Camp',
                'lama_program'     => '2 Pekan',
                'kategori'         => 'Baca Kitab - 2 Pekan (Online non Camp)',
                'harga'            => 189000,
                'features_program' => json_encode(array_merge(['Program Baca Kitab: Tamhid'], $benefitOnline)),
            ],
            [
                'nama'             => 'Baca Kitab Muthawassith - 2 Pekan Online Non Camp',
                'lama_program'     => '2 Pekan',
                'kategori'         => 'Baca Kitab - 2 Pekan (Online non Camp)',
                'harga'            => 189000,
                'features_program' => json_encode(array_merge(['Program Baca Kitab: Muthawassith'], $benefitOnline)),
            ],
            [
                'nama'             => 'Baca Kitab Mutaqaddim - 2 Pekan Online Non Camp',
                'lama_program'     => '2 Pekan',
                'kategori'         => 'Baca Kitab - 2 Pekan (Online non Camp)',
                'harga'            => 189000,
                'features_program' => json_encode(array_merge(['Program Baca Kitab: Mutaqaddim'], $benefitOnline)),
            ],
            [
                'nama'             => 'Baca Kitab Tarjamah - 2 Pekan Online Non Camp',
                'lama_program'     => '2 Pekan',
                'kategori'         => 'Baca Kitab - 2 Pekan (Online non Camp)',
                'harga'            => 189000,
                'features_program' => json_encode(array_merge(['Program Baca Kitab: Tarjamah'], $benefitOnline)),
            ],
        ];

        foreach ($programsOnline as $data) {
            ProgramOnline::create([
                'nama'             => $data['nama'],
                'slug'             => Str::slug($data['nama']) . '-arab-bieplus',
                'program_bahasa'   => 'Arab',
                'lama_program'     => $data['lama_program'],
                'kategori'         => $data['kategori'],
                'harga'            => $data['harga'],
                'features_program' => $data['features_program'],
                'is_active'        => 1,
                'kursus'           => 'bieplus',
                'thumbnail'        => null,
            ]);
        }
    }
}
