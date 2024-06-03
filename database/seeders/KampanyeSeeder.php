<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KampanyeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kampanye')->insert([
            [
                'slug' => Str::slug('Gerakan Gizi Nasional: Dukungan Anda Membawa Nutrisi untuk Semua', '-'),
                'nama' => 'Gerakan Gizi Nasional: Dukungan Anda Membawa Nutrisi untuk Semua',
                'gambar' => "image/about/kasian5.jpg",
                'tanggal_awal' => now(),
                'tanggal_akhir' => now()->addMonths(3),
                'deskripsi' => 'Bergabunglah dengan gerakan gizi nasional kami untuk memberikan dukungan nutrisi kepada anak-anak di seluruh negeri. Donasi Anda akan membantu menyediakan makanan bergizi dan mendukung program pendidikan gizi.',
                'lokasi' => 'Jakarta',
                'targetDonasi' => '100000000',
                'status' => 'aktif',
                'makanan_id' => 1 // Asumsikan ID makanan yang valid
            ],
            [
                'slug' => Str::slug('Kampanye Kesehatan Anak: Gizi Seimbang untuk Masa Depan Cerah', '-'),
                'nama' => 'Kampanye Kesehatan Anak: Gizi Seimbang untuk Masa Depan Cerah',
                'gambar' => "image/about/kasian.jpg",
                'tanggal_awal' => now(),
                'tanggal_akhir' => now()->addMonths(6),
                'deskripsi' => 'Mari bersama-sama memastikan setiap anak memiliki akses ke makanan bergizi seimbang. Kampanye ini bertujuan untuk mengurangi angka malnutrisi dan meningkatkan kesehatan anak-anak melalui berbagai program intervensi gizi.',
                'lokasi' => 'Bandung',
                'targetDonasi' => '200000000',
                'status' => 'aktif',
                'makanan_id' => 2 // Asumsikan ID makanan yang valid
            ],
            [
                'slug' => Str::slug('Program Pemberdayaan Gizi: Meningkatkan Kesehatan Ibu dan Anak', '-'),
                'nama' => 'Program Pemberdayaan Gizi: Meningkatkan Kesehatan Ibu dan Anak',
                'gambar' => "image/about/kasian6.jpg",
                'tanggal_awal' => now(),
                'tanggal_akhir' => now()->addMonths(9),
                'deskripsi' => 'Dukung program pemberdayaan gizi kami yang berfokus pada kesehatan ibu hamil dan anak-anak. Melalui donasi Anda, kami dapat memberikan bantuan makanan bergizi, suplemen, dan pendidikan gizi yang berkelanjutan.',
                'lokasi' => 'Surabaya',
                'targetDonasi' => '300000000',
                'status' => 'nonaktif',
                'makanan_id' => 3 // Asumsikan ID makanan yang valid
            ],
            [
                'slug' => Str::slug('Kampanye Gizi Sekolah: Menanamkan Kebiasaan Makan Sehat Sejak Dini', '-'),
                'nama' => 'Kampanye Gizi Sekolah: Menanamkan Kebiasaan Makan Sehat Sejak Dini',
                'gambar' => "image/about/kasian7.jpg",
                'tanggal_awal' => now(),
                'tanggal_akhir' => now()->addYear(),
                'deskripsi' => 'Kampanye ini bertujuan untuk menanamkan kebiasaan makan sehat pada anak-anak sekolah melalui program makan siang bergizi dan kegiatan edukasi gizi. Dukungan Anda akan membantu menciptakan generasi yang lebih sehat.',
                'lokasi' => 'Yogyakarta',
                'targetDonasi' => '400000000',
                'status' => 'selesai',
                'makanan_id' => 4 // Asumsikan ID makanan yang valid
            ],
            [
                'slug' => Str::slug('Aksi Peduli Gizi: Memberantas Kelaparan di Daerah Tertinggal', '-'),
                'nama' => 'Aksi Peduli Gizi: Memberantas Kelaparan di Daerah Tertinggal',
                'gambar' => "image/about/kasian2.jpg",
                'tanggal_awal' => now(),
                'tanggal_akhir' => now()->addMonths(12),
                'deskripsi' => 'Bantu kami memberantas kelaparan dan malnutrisi di daerah tertinggal melalui aksi peduli gizi. Kampanye ini berfokus pada distribusi makanan bergizi dan dukungan kesehatan kepada komunitas yang paling membutuhkan.',
                'lokasi' => 'Papua',
                'targetDonasi' => '500000000',
                'status' => 'aktif',
                'makanan_id' => 5 // Asumsikan ID makanan yang valid
            ]
        ]);
    }
}
