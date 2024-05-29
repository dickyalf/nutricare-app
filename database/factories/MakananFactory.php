<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Makanan>
 */
class MakananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $nama = [
            "Nasi Goreng Spesial",
            "Mie Ayam Jamur",
            "Soto Ayam Surabaya",
            "Rendang Padang",
            "Gado-Gado Betawi",
            "Pecel Lele",
            "Ayam Bakar Taliwang",
            "Sate Kambing",
            "Bakso Urat",
            "Martabak Manis",
            "Tahu Bulat",
            "Tempe Goreng",
            "Nasi Uduk",
            "Bebek Goreng",
            "Ikan Bakar Jimbaran",
            "Gulai Ikan Patin",
            "Sayur Asem",
            "Sop Buntut",
            "Nasi Liwet Solo",
            "Otak-Otak Ikan",
            "Kerak Telor",
            "Rawon Nguling",
            "Lumpia Semarang",
            "Nasi Kuning Komplit",
            "Pisang Goreng",
            "Es Cendol",
            "Laksa Bogor",
            "Kue Cubit",
            "Bika Ambon",
            "Pempek Palembang",
            "Ayam Geprek",
            "Sate Padang",
            "Nasi Tumpeng",
            "Serabi Solo",
            "Bubur Ayam",
            "Es Doger",
            "Batagor",
            "Gulai Kambing",
            "Ikan Asin Pedas",
            "Tahu Telor",
            "Mie Kocok",
            "Asinan Bogor",
            "Soto Betawi",
            "Nasi Campur Bali",
            "Klepon",
            "Dadar Gulung",
            "Lontong Sayur",
            "Opor Ayam",
            "Papeda Kuah Kuning",
            "Es Pisang Ijo"
        ];

        $deskripsi = [
            "Nasi bergizi tinggi, dipadukan dengan lauk protein untuk memenuhi kebutuhan harian.",
            "Paket makanan sehat berisi buah-buahan segar dan kacang-kacangan, sumber energi alami.",
            "Roti gandum kaya serat, bagus untuk pencernaan dan kesehatan jantung.",
            "Sup sayuran penuh nutrisi, hangat dan mengenyangkan untuk tubuh dan jiwa.",
            "Bubur ayam, makanan lembut yang mudah dicerna, cocok untuk semua usia.",
            "Paket hemat dengan kandungan kalori seimbang, ideal untuk makan siang.",
            "Box nasi dengan variasi lauk pauk, mewakili kekayaan budaya kuliner lokal.",
            "Makanan khas daerah yang dibuat dari bahan-bahan lokal berkualitas.",
            "Paket makanan kering yang tahan lama, praktis untuk distribusi jarak jauh.",
            "Mie instan fortifikasi, cepat saji dan mengandung tambahan vitamin dan mineral.",
            "Snack sehat berbasis protein, baik untuk camilan di antara waktu makan.",
            "Sereal sarapan yang diperkaya nutrisi, memulai hari dengan tenaga penuh.",
            "Makanan beku yang mudah disiapkan, cocok untuk keadaan darurat atau bencana.",
            "Makanan bayi yang sehat dan hipoalergenik, mendukung tumbuh kembang optimal.",
            "Jus buah segar, tanpa tambahan gula, penuh dengan vitamin esensial.",
            "Makanan kaleng dengan masa simpan panjang, ideal untuk stok bantuan.",
            "Biskuit protein tinggi, sempurna untuk mengisi energi dengan cepat.",
            "Paket sayur dan buah segar, mendukung pola makan seimbang.",
            "Olahan ikan dengan kaya omega-3, mendukung kesehatan otak dan jantung.",
            "Makanan vegetarian lengkap dengan semua makronutrien yang dibutuhkan tubuh.",
            "Roti manis dan selai, kombinasi sempurna untuk sarapan yang menyenangkan.",
            "Paket suplemen makanan untuk menunjang kebutuhan gizi harian.",
            "Smoothie buah beku, mudah dibuat dan penuh dengan antioksidan.",
            "Paket salad siap saji, segar dan penuh dengan berbagai nutrisi.",
            "Kue kering buatan rumah, camilan manis tanpa bahan pengawet.",
            "Makanan rendah garam dan rendah gula, cocok untuk penderita diabetes atau hipertensi.",
            "Yogurt rendah lemak, baik untuk pencernaan dan kaya akan probiotik.",
            "Sandwich daging dan sayuran, makanan lengkap dalam satu genggaman.",
            "Granola bar, sumber serat dan energi yang baik untuk perjalanan.",
            "Paket makanan bebas gluten, aman untuk mereka yang sensitif atau alergi.",
            "Kacang panggang, sumber protein nabati yang baik dan kaya serat.",
            "Keripik sayuran, camilan renyah dan sehat untuk segala usia.",
            "Teh herbal, menenangkan dan baik untuk detoksifikasi tubuh.",
            "Kopi instan premium, meningkatkan fokus dan energi setiap pagi.",
            "Pasta gandum utuh, sumber karbohidrat kompleks yang baik untuk energi berkelanjutan.",
            "Bubur kacang hijau, makanan tradisional yang kaya akan protein dan rendah lemak.",
            "Paket sembako dasar, mencakup beras, minyak, dan gula untuk kebutuhan pokok.",
            "Pizza beku, makanan cepat saji yang disukai semua kalangan dan mudah disiapkan.",
            "Hidangan penutup buah, manis dan menyegarkan tanpa tambahan pemanis buatan.",
            "Susu UHT, sumber kalsium yang baik untuk tulang dan gigi.",
            "Zuppa soup, hidangan Italia yang kaya rasa dan mengenyangkan.",
            "Makanan laut beku, sumber protein berkualitas tinggi dan mudah disiapkan.",
            "Puding coklat, dessert yang lezat sekaligus sumber energi.",
            "Nugget sayur, alternatif sehat untuk camilan cepat saji yang disukai anak-anak.",
            "Salad buah tropis, campuran segar yang kaya vitamin dan serat.",
            "Omelet siap saji, sarapan praktis tinggi protein.",
            "Ayam panggang, hidangan lezat dan kaya protein untuk makan malam keluarga.",
            "Vegan burger, pilihan sehat dan ramah lingkungan tanpa mengorbankan rasa.",
            "Sop krim jamur, lembut dan hangat untuk hari yang dingin.",
            "Paella seafood, sajian Spanyol yang kaya rasa dengan beragam seafood."
        ];

        $faker = Faker::create('id_ID');
        return [
            'nama' => $faker->randomElement($nama),
            'harga' => $faker->numberBetween(10000, 30000),
            'deskripsi' => $faker->randomElement($deskripsi),
        ];
    }
}
