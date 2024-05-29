<?php

namespace Database\Factories;

use App\Models\FotoDonasi;
use App\Models\Kampanye;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pengguna;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BuktiDonasi>
 */
class BuktiDonasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $deskripsi = [
            "Paket nasi kotak telah diserahkan kepada 50 keluarga di area Jakarta Timur.",
            "Distribusi 200 bungkus roti kepada anak-anak di panti asuhan Bandung.",
            "Penyerahan 100 paket buah segar ke pusat rehabilitasi lansia di Surabaya.",
            "Kirim 500 paket makanan ringan ke pusat pengungsian alam di Aceh.",
            "Pemberian 150 paket makanan bergizi untuk warga kurang mampu di Bali.",
            "Sumbangan 75 paket makanan sehat ke sekolah dasar di daerah terpencil Sulawesi.",
            "Penyediaan 300 bungkus makanan siap saji untuk petugas medis di rumah sakit Yogyakarta.",
            "Pengiriman 250 paket sarapan ke kampung nelayan di Kalimantan.",
            "Distribusi makanan Ramadan sebanyak 500 paket di berbagai masjid di Medan.",
            "Peluncuran truk makanan gratis di parkiran supermarket Semarang, menyediakan 400 porsi.",
            "Donasi 100 kotak susu dan sereal ke pusat krisis anak di Jakarta.",
            "Distribusi 600 snack box ke kantor polisi dan pemadam kebakaran di Surabaya.",
            "Penyerahan 350 paket makanan khusus kepada pekerja migran di Batam.",
            "Pengiriman 500 paket makanan hangat ke pusat bantuan bencana alam di Lombok.",
            "Donasi 200 paket makanan beku ke dapur umum yang melayani warga tidak mampu di Bandung.",
            "Pelaksanaan program 'Makanan untuk Semua', mencapai 1.000 orang di Malang.",
            "Distribusi 250 paket berisi roti dan selai kepada petugas kebersihan di Jakarta.",
            "Penyaluran 300 paket makanan vegetarian ke komunitas seni di Ubud.",
            "Distribusi 400 porsi bubur ayam ke rumah singgah pasien di Makassar.",
            "Penyerahan 100 paket makanan kering ke daerah gempa di Sulawesi.",
            "Pengiriman 150 paket makanan halal kepada komunitas Muslim di Riau.",
            "Pemberian 200 nasi bungkus untuk para pedagang kaki lima di Jakarta selama pandemi.",
            "Distribusi 300 paket makanan di hari pendidikan anak nasional di Bogor.",
            "Pengiriman 250 paket makanan ke petugas pemadam kebakaran selama musim kebakaran hutan.",
            "Sumbangan 500 porsi ayam bakar untuk acara komunitas di Pontianak.",
            "Penyaluran 200 bungkus snack sehat ke turnamen olahraga anak-anak di Palembang.",
            "Penyerahan 100 paket buah segar untuk pasien di klinik kesehatan mental Jakarta.",
            "Distribusi 400 paket sup sayuran hangat ke warga terdampak banjir di Semarang.",
            "Pengiriman 350 paket makanan siap saji ke para pekerja di perkebunan teh Bandung.",
            "Sumbangan 250 paket makanan untuk hari besar keagamaan di Medan.",
            "Donasi 450 porsi pasta ke acara penggalangan dana amal di Surabaya.",
            "Pemberian 500 paket sarapan sehat kepada peserta maraton di Bali.",
            "Distribusi 600 paket makanan ringan di festival anak yatim di Malang.",
            "Pengiriman 200 paket makanan hangat ke klinik kesehatan daerah terpencil di Papua.",
            "Penyaluran 150 paket makanan sehat ke pusat pelatihan kerja di Yogyakarta.",
            "Pemberian 300 paket snack ke pusat rehabilitasi narkoba di Jakarta.",
            "Distribusi 100 paket makanan hangat ke shelter tunawisma di Bandung.",
            "Penyerahan 500 paket makanan ringan kepada korban bencana alam di Aceh.",
            "Pengiriman 400 paket makanan kering ke daerah konflik di Poso.",
            "Donasi 200 porsi makan siang ke panti jompo di Surakarta.",
            "Distribusi 250 paket makanan khusus untuk anak-anak di panti asuhan Lombok.",
            "Pengiriman 300 paket makanan sehat ke klinik kesehatan masyarakat di Kalimantan.",
            "Penyaluran 350 paket makanan kepada tenaga kesehatan di rumah sakit Jakarta.",
            "Pemberian 400 paket makanan siap saji kepada relawan banjir di Samarinda.",
            "Penyerahan 150 paket makanan berat ke acara amal tahunan di Bali.",
            "Distribusi 500 paket makanan sehat untuk peserta seminar kesehatan di Makassar.",
            "Pengiriman 200 paket buah dan sayuran segar ke sekolah-sekolah di Papua.",
            "Sumbangan 100 paket makanan ringan untuk kegiatan komunitas di Banda Aceh.",
            "Donasi 450 porsi makan siang kepada peserta konferensi di Jakarta.",
            "Penyaluran 300 paket makanan ke petugas kebersihan di stasiun-stasiun besar di Surabaya."
        ];
        $faker = Faker::create('id_ID');
        return [
            'kampanye_id' => Kampanye::factory(),
            'foto_donasi_id' => FotoDonasi::factory(),
            'deskripsi' => $faker->randomElement($deskripsi),
        ];
    }
}
