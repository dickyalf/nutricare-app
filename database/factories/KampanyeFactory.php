<?php

namespace Database\Factories;

use App\Models\Makanan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kampanye>
 */
class KampanyeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('id_ID');
        $nama = [
            "Makan Untuk Semua: Berbagi Pangan, Berbagi Harapan. Ayo, Gabung Sekarang!",
            "Satu Piring Lebih: Bergerak Bersama Mengakhiri Kelaparan. Daftar dan Donasi!",
            "Kenyang Bersama: Kita Bisa Membuat Perbedaan. Bergabunglah Dalam Aksi Kita!",
            "Hidangan Harapan: Berbagi Makanan, Berbagi Senyum. Donasi Anda Sangat Berarti!",
            "Nasi Kotak Kebaikan: Setiap Donasi Menghangatkan Hati. Mari Kita Beraksi!",
            "Dapur Umum: Karena Setiap Perut Harus Terisi. Ayo, Berkontribusi!",
            "Piring Penuh: Berbagi Makanan, Mengisi Hati. Sumbangkan Sekarang!",
            "Jelajah Pangan: Makanan untuk Semua, Oleh Semua. Bergabung dan Berbagi!",
            "Kampanye Kaldu Kasih: Hidangan Hangat untuk yang Membutuhkan. Donasi Hari Ini!",
            "Santapan Sehat: Nutrisi untuk Semua, Kebaikan untuk Bumi. Ikuti Kami!",
            "Keranjang Kebaikan: Memenuhi Piring di Setiap Rumah. Mari Berbagi!",
            "Gizi Global: Dukung Distribusi Makanan Sehat. Bersama, Kita Kuat!",
            "Selera Solidaritas: Bersatu dalam Rasa dan Perjuangan. Gabung dalam Gerakan Ini!",
            "Operasi Pangan: Perjuangan Melawan Kelaparan. Ayo, Bergabung dan Bantu!",
            "Misi Makanan: Setiap Sumbangan Membawa Perubahan. Donasi Sekarang!",
            "Banjir Baskom: Makanan Hangat untuk Hati yang Dingin. Ayo, Panaskan Dunia!",
            "Senyum Semangkuk: Berbagi Semangkok Sup, Berbagi Senyum. Partisipasi Anda Penting!",
            "Seruan Sarapan: Mari Kita Mulai Hari dengan Kebaikan. Bergabung dan Berbagi!",
            "Kafe Kasih: Tempat Berbagi Makanan dan Harapan. Sumbang dan Dukung!",
            "Festival Nutrisi: Karena Setiap Gizi Penting. Ayo, Dukung Gerakan Ini!",
            "Hidangan Hangat: Sebarkan Cinta Melalui Makanan. Donasi untuk Dapur Kami!",
            "Perut Penuh, Hati Hangat: Berbagi Makanan, Berbagi Cinta. Bergabung Sekarang!",
            "Gerakan Gizi: Dukungan Anda Membawa Nutrisi. Mari Beraksi Bersama!",
            "Rantang Resik: Makanan Bersih untuk Semua. Berpartisipasi dalam Kampanye Ini!",
            "Sahabat Selera: Berbagi Rasa, Berbagi Cerita. Donasi dan Ceritakan!",
            "Kampanye Ketupat: Berbagi Kebahagiaan Lewat Ketupat. Ikut Serta dan Berbagi!",
            "Dapur Damai: Memasak Makanan, Memasak Harapan. Donasi untuk Kebaikan!",
            "Proyek Porsi: Setiap Porsi Membawa Perubahan. Ayo, Donasi Sekarang!",
            "Buffet Berbudi: Berbagi Buffet, Berbagi Berkah. Bergabung dalam Kampanye Ini!",
            "Pesta Pangan: Karena Makan Bersama Itu Lebih Baik. Ayo, Bergabung!",
            "Sumbangan Semangkuk: Sebuah Mangkuk untuk Semangat. Donasi Makananmu!",
            "Harapan Hidangan: Setiap Piring Berarti. Sumbang untuk Perubahan!",
            "Dapur Kebaikan: Dari Dapur dengan Cinta. Mari Kita Berbagi!",
            "Operasi Organik: Sehat Bersama dengan Makanan Organik. Gabung dan Dukung!",
            "Pangan Pintar: Makanan Cerdas untuk Masa Depan Cerah. Ayo, Ikut Serta!",
            "Pantry Publik: Akses Makanan untuk Semua. Dukung Kami!",
            "Relai Rasa: Estafet Makanan Melintasi Kota. Bergabung dan Bantu!",
            "Kantin Kasih: Makan Bersama, Berbagi Bersama. Donasi untuk Ini!",
            "Gudang Gizi: Kebaikan Disimpan, Dibagi Saat Dibutuhkan. Bergabunglah!",
            "Olahraga Oatmeal: Energi untuk Semua. Mari Berbagi Makanan Sehat!",
            "Bazar Beras: Beras untuk Bantu Mengisi Perut. Sumbangkan dan Dukung!",
            "Gerai Gado-Gado: Salurkan Cinta Lewat Gado-Gado. Ayo, Bergabung!",
            "Sup Solidaritas: Kekuatan dalam Setiap Sendok. Ikuti dan Berbagi!",
            "Brunch Berbagi: Sarapan dan Makan Siang Bersama. Gabung dan Dukung!",
            "Nasi untuk Negeri: Berbagi Pangan, Berbagi Nasib. Donasi Sekarang!",
            "Kedai Kedermawanan: Tempat Berbagi yang Hangat. Ikut Serta dan Bantu!",
            "Dapur Dedikasi: Dedikasi untuk Makanan dan Manusia. Bergabung dalam Gerakan!",
            "Proyek Penyelamatan Pangan: Selamatkan Makanan, Selamatkan Harapan. Donasi Hari Ini!",
            "Buffet Bantuan: Setiap Piring Adalah Bantuan. Berkontribusi Sekarang!",
            "Cafe Cakrawala: Berbagi Cakrawala Lewat Makanan. Bergabung dan Rasakan!",
            "Perayaan Pasta: Karena Pasta Menghubungkan Hati. Donasi dan Ikut Serta!",
            "Distribusi Donat: Donat untuk Dunia. Bergabung dan Buat Perubahan!"
        ];
        $deskripsi = [
            "Bergabunglah dalam usaha kami untuk memberi makan yang membutuhkan. Setiap sen yang Anda sumbangkan membantu. Bersama, kita dapat membuat perbedaan. Berkontribusi sekarang dan lihat dampak langsung dari kebaikan Anda.",
            "Mari kita beri kehangatan melalui makanan. Donasi Anda akan menjadi santapan bergizi bagi mereka yang kelaparan. Setiap bantuan, besar atau kecil, sangat berarti. Ayo, jadilah bagian dari solusi hari ini!",
            "Tangan Anda dapat memberi harapan. Dukungan Anda berarti lebih dari sekadar makanan. Ini tentang memberi kesempatan untuk hidup yang lebih baik. Sumbang sekarang dan bantu kami menyebarkan kebaikan.",
            "Setiap anak berhak mendapatkan nutrisi yang cukup. Ayo bantu kami menyediakan makanan sehat untuk anak-anak yang membutuhkan. Donasi Anda sangat berarti. Bersama, kita dapat melawan kelaparan.",
            "Di dunia yang cukup untuk semua, mari pastikan tidak ada yang tidur lapar. Berpartisipasilah dalam kampanye donasi makanan kami. Kebersamaan kita dapat mengubah banyak hidup. Donasi Anda adalah awal dari perubahan itu.",
            "Ayo beraksi! Bantu kami memberi makan keluarga yang membutuhkan. Setiap donasi, tidak peduli seberapa kecil, membantu. Bergabunglah dengan kami dalam misi ini untuk membuat dunia menjadi tempat yang lebih baik.",
            "Bersama kita kuat. Dukungan Anda membantu kami mencapai mereka yang paling membutuhkan. Berikan donasi hari ini dan jadilah bagian dari perubahan positif. Kebaikan Anda membuat perbedaan.",
            "Hari ini Anda bisa membantu menghapus kelaparan. Donasi Anda akan mengubah hidup. Ayo bantu kami menyediakan makanan yang cukup untuk semua. Karena setiap perut yang kenyang membawa senyum.",
            "Kesempatan untuk makan tidak seharusnya menjadi kemewahan. Bersama, kita dapat memastikan akses makanan yang adil. Donasikan sekarang untuk memberi makan yang membutuhkan. Kita adalah perubahan yang kita inginkan.",
            "Dengan setiap donasi, Anda membantu memperluas jangkauan makanan kami. Bersama, kita dapat melawan kelaparan. Bergabunglah dalam kampanye ini. Bantu kami membuat perbedaan yang nyata.",
            "Kebaikan Anda bisa mengubah dunia. Berikan makanan kepada mereka yang kelaparan. Sumbangan Anda sangat dibutuhkan. Ayo, berbagi hari ini dan lihat perubahan yang Anda bawa.",
            "Perut yang lapar membutuhkan tangan yang membantu. Donasi Anda akan langsung memberi makan mereka yang membutuhkan. Ayo, berkontribusi sekarang. Bersama kita bisa mengisi lebih banyak piring.",
            "Bersama, kita dapat memastikan bahwa setiap anak memiliki makanan bergizi setiap hari. Ayo, bergabung dalam kampanye donasi makanan kami. Setiap sumbangan membantu. Kita bisa menjadi kekuatan perubahan.",
            "Setiap sumbangan yang Anda berikan membantu kami menyediakan makanan bagi yang membutuhkan. Mari kita hentikan kelaparan. Donasi Anda berarti lebih dari yang Anda tahu. Ayo, beraksi sekarang!",
            "Bersama, kita bisa mengatasi kelaparan. Donasi Anda membantu kami menyediakan makanan bergizi bagi mereka yang membutuhkan. Setiap sen penting. Ayo, berkontribusi hari ini dan buat perubahan yang nyata.",
            "Anda bisa menjadi pahlawan dalam perjuangan melawan kelaparan. Donasi Anda akan memberi makan banyak mulut yang lapar. Mari kita bantu mereka yang tidak berdaya. Sumbang sekarang dan lihat dampak Anda.",
            "Mari kita bersatu untuk memberi makan mereka yang membutuhkan. Donasi Anda sangat dibutuhkan dan akan langsung digunakan. Bergabunglah dalam kampanye ini. Bersama kita bisa memberi lebih banyak.",
            "Setiap piring yang kita isi adalah langkah menuju dunia yang lebih baik. Donasi Anda membantu kami memberi makan yang membutuhkan. Ayo, gabung sekarang. Bantu kami mengubah kehidupan.",
            "Mari kita buat perbedaan bersama. Donasi Anda akan membantu mengisi piring mereka yang membutuhkan. Ayo, beraksi! Setiap kontribusi membantu kami mendekatkan dunia pada bebas kelaparan.",
            "Dukungan Anda sangat berarti dalam perjuangan melawan kelaparan. Donasikan sekarang untuk membantu kami memberi makan yang membutuhkan. Mari kita hentikan kelaparan bersama. Ayo berbagi kebaikan.",
            "Setiap sumbangan Anda membantu kami mengisi perut yang kosong. Bergabunglah dengan kami dalam kampanye ini. Mari kita berikan harapan melalui makanan. Bantu kami menyebarkan cinta dan kebaikan.",
            "Donasi Anda berarti dunia bagi mereka yang kelaparan. Ayo, berkontribusi sekarang. Setiap bantuan membawa kami satu langkah lebih dekat untuk mengakhiri kelaparan. Kebaikan Anda sangat berarti.",
            "Mari kita beri mereka kekuatan untuk melanjutkan. Donasi Anda akan memberi makanan kepada mereka yang membutuhkan. Ayo, berbagi dan berbuat baik. Setiap tindakan Anda menginspirasi kebaikan.",
            "Setiap donasi membawa harapan. Dukungan Anda sangat berarti bagi mereka yang membutuhkan. Ayo, bantu kami mengakhiri kelaparan. Bersama kita bisa membuat perubahan besar.",
            "Ayo, bergabung dengan kami dalam kampanye donasi makanan. Bersama, kita bisa memberi makan yang kelaparan. Donasi Anda adalah kunci perubahan itu. Mari kita berikan harapan dan makanan.",
            "Setiap piring yang terisi adalah harapan yang terwujud. Donasi Anda membantu kami memberi makan yang kelaparan. Ayo, bantu kami menyebarkan kebaikan. Bergabunglah dengan kami sekarang.",
            "Bantu kami mencapai lebih banyak. Donasi Anda akan langsung memberi makan mereka yang membutuhkan. Mari berpartisipasi dalam perjuangan ini. Bersama kita bisa mengakhiri kelaparan.",
            "Donasi Anda membuat perbedaan. Bergabunglah dalam kampanye ini untuk membantu mereka yang membutuhkan. Setiap sen yang Anda sumbangkan membawa kami lebih dekat untuk mengisi perut yang lapar.",
            "Mari kita isi piring mereka yang kosong. Donasi Anda membantu kami menyediakan makanan yang dibutuhkan. Ayo, berkontribusi hari ini. Bantu kami membuat perbedaan dalam kehidupan mereka.",
            "Setiap kontribusi membawa kami lebih dekat untuk mengakhiri kelaparan. Donasi Anda sangat berharga. Ayo, bergabung dalam upaya kami. Bantu kami memberi makan yang membutuhkan.",
            "Donasi Anda adalah tindakan kebaikan yang berdampak besar. Bergabunglah dalam kampanye donasi makanan kami. Bersama, kita bisa memberi makan banyak orang. Ayo, beraksi dan tunjukkan kepedulian Anda.",
            "Mari kita berikan makanan kepada mereka yang membutuhkan. Setiap sumbangan adalah langkah menuju dunia yang lebih baik. Donasi Anda membantu. Ayo, gabung dan buat perbedaan hari ini!",
            "Dukungan Anda membantu kami menjangkau lebih banyak yang kelaparan. Donasi Anda berarti lebih dari sekedar makanan. Itu adalah tanda harapan. Bergabunglah dalam upaya kami untuk mengakhiri kelaparan.",
            "Mari kita hentikan kelaparan bersama. Donasi Anda akan langsung memberi makan yang membutuhkan. Setiap kontribusi membantu. Ayo, bantu kami menyebarkan cinta dan makanan.",
            "Ayo, bergabung dalam kampanye donasi makanan. Donasi Anda membantu kami menyediakan makanan bergizi. Bersama, kita bisa mengakhiri kelaparan. Setiap piring yang terisi adalah kemenangan.",
            "Mari kita berikan harapan melalui makanan. Donasi Anda sangat dibutuhkan. Setiap sumbangan membantu kami memberi makan yang kelaparan. Bergabunglah dengan kami hari ini dan buat perubahan.",
            "Setiap sumbangan Anda membantu kami memberi makan yang membutuhkan. Bergabunglah dalam upaya kami. Ayo, bantu kami mengakhiri kelaparan. Donasi Anda berarti lebih dari yang Anda bayangkan.",
            "Bantu kami memberi makan mereka yang kelaparan. Donasi Anda akan langsung digunakan. Mari kita buat perbedaan bersama. Ayo, bergabung dan sumbangkan sekarang.",
            "Bersama, kita dapat memberi makan yang kelaparan. Setiap donasi membantu. Ayo, bantu kami mengisi lebih banyak piring. Bergabunglah dalam kampanye kami dan tunjukkan kepedulian Anda.",
            "Ayo, jadilah bagian dari solusi. Donasi Anda membantu kami menyediakan makanan bagi yang membutuhkan. Setiap sen penting. Bergabunglah dengan kami sekarang dan bantu kami mengakhiri kelaparan.",
            "Setiap kontribusi Anda membawa kami lebih dekat untuk mengakhiri kelaparan. Donasi Anda sangat berharga. Bergabunglah dalam kampanye kami. Bersama kita bisa memberi makan lebih banyak orang.",
            "Mari kita isi lebih banyak piring dengan makanan. Donasi Anda membantu kami mencapai yang kelaparan. Setiap bantuan sangat berarti. Ayo, sumbang sekarang dan buat perbedaan.",
            "Dukungan Anda sangat berarti dalam kampanye ini. Donasi Anda akan memberi makan yang membutuhkan. Mari kita bersatu dan berbagi. Ayo, bergabung sekarang dan tunjukkan kepedulian Anda.",
            "Mari kita berbagi makanan dan harapan. Donasi Anda sangat dibutuhkan. Setiap kontribusi membantu kami memberi makan yang membutuhkan. Bergabunglah dalam upaya ini dan bantu kami membuat perubahan.",
            "Bersama, kita bisa mengakhiri kelaparan. Donasi Anda sangat berarti. Bergabunglah dalam kampanye donasi makanan kami. Setiap sumbangan membantu kami memberi makan lebih banyak mulut yang lapar.",
            "Setiap piring yang terisi adalah harapan baru. Donasi Anda membantu kami memberi makan yang kelaparan. Ayo, berkontribusi hari ini. Bantu kami menyebarkan kebaikan dan makanan.",
            "Mari kita berikan makanan dan harapan kepada mereka yang membutuhkan. Donasi Anda sangat berarti. Bergabunglah dengan kami dalam kampanye ini. Setiap sumbangan membantu kami mengakhiri kelaparan.",
            "Setiap kontribusi Anda membantu kami menyediakan makanan yang cukup. Ayo, bergabung dalam kampanye donasi makanan. Donasi Anda sangat dibutuhkan. Bersama, kita bisa memberi makan lebih banyak.",
            "Donasi Anda membantu kami memberi makan yang kelaparan. Bergabunglah dalam upaya kami. Setiap sumbangan membawa harapan. Ayo, bantu kami mengakhiri kelaparan hari ini.",
            "Bergabunglah dalam misi kami untuk mengakhiri kelaparan. Donasi Anda membantu kami menyediakan makanan. Ayo, berkontribusi sekarang. Setiap tindakan Anda membuat perbedaan besar."
        ];

        return [
            'nama' => $faker->randomElement($nama),
            'gambar' => $faker->imageUrl(640, 480, 'kampanye', true),
            'tanggal_awal' => $faker->dateTimeThisYear(),
            'tanggal_akhir' => $faker->dateTimeThisYear('+6 months'),
            'deskripsi' => $faker->randomElement($deskripsi),
            'lokasi' => $faker->city,
            'targetDonasi' => $faker->numberBetween(1000000, 5000000),
            'status' => $faker->randomElement(['aktif', 'nonaktif', 'selesai']),
            'makanan_id' => Makanan::factory()
        ];
    }
}
