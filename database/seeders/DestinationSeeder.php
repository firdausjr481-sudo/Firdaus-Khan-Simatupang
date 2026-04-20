<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::create([
            'name' => "Asia heritage",
            'description' => "Bangunan replika dari China, Jepang, dan Korea di desa warisan dengan seluncuran anak dan tempat berfoto.",
            'location' => "Jl. Yos Sudarso No.12, Muara Fajar, Kec. Rumbai, Kota Pekanbaru, Riau 28265",
            'working_days' => "Weekend",
            'working_hours' => "07.00am - 10.00pm",
            'ticket_price' => "30000",
        ]);

        Destination::create([
            'name' => "Danau Tosca",
            'description' => "destinasi wisata alam dan waterpark yang sedang viral di Rumbai, Pekanbaru, Riau, terkenal dengan air berwarna hijau tosca yang unik.",
            'location' => "Jl. T. Kasim Perkasa, Rumbai Bukit, Kec. Rumbai Barat, Kota Pekanbaru, Riau.",
            'working_days' => "Weekend",
            'working_hours' => "08.00am - 05.00pm",
            'ticket_price' => "15000",
        ]);

        Destination::create([
            'name' => "Alam Mayang Pekanbaru",
            'description' => "Alam mayang merupakan sebuah tempat wisata yang sangat menarik dijadikan tempat wisata bersama keluarga besar.Beberapa wahana di Alam Mayang Pekanbaru antara lain banana boat, flying fox, sepeda air, safary train dan masih banyak lagi.",
            'location' => "Jl. Alam MayangTengkerang Tim., Kec. Tenayan Raya, Kota Pekanbaru, Riau 28131",
            'working_days' => "All Day",
            'working_hours' => "08.00am - 06.00pm",
            'ticket_price' => "20000",
        ]);

        Destination::create([
            'name' => "Lembah Harau",
            'description' => "Lembah Harau adalah destinasi wisata alam populer di Kabupaten Lima Puluh Kota, Sumatera Barat, yang terkenal dengan tebing granit terjal setinggi 100-500 meter dan air terjun.",
            'location' => "Kecamatan Harau, Nagari Harau, dekat Kota Payakumbuh",
            'working_days' => "All Day",
            'working_hours' => "08.00am - 10.00pm",
            'ticket_price' => "50000",
        ]);

        Destination::create([
            'name' => "Pantai Koneng",
            'description' => "Pemandangan yang cukup menarik, cocok untuk menghabiskan waktu luang sembari manunggu matahari terbenam",
            'location' => "Dumai",
            'working_days' => "All Day",
            'working_hours' => "24/7",
            'ticket_price' => "30000",
        ]);

        Destination::create([
            'name' => "Air Terjun Lembah Anai",
            'description' => "Air terjun mengalir deras di atas tebing terjal yang rimbun di tepi jalan, dengan penjual camilan & suvenir",
            'location' => "G88Q+H72, Singgalang, Kec. Sepuluh Koto, Kabupaten Tanah Datar, Sumatera Barat 27282",
            'working_days' => "All Day",
            'working_hours' => "24/7",
            'ticket_price' => "20000",
        ]);

        Destination::create([
            'name' => "Pantai Air Manis",
            'description' => "Pantai Air Manis inilah yang memiliki batu Malin Kundang. Selain itu, keindahan alamnya cocok dinikmati sambil bersantai dengan keluarga. Gelombang ombaknya yang tenang dan rendah bisa digunakan untuk berenang di sekitarnya. Di sekitarnya, anda Pulau Pisang Kecil dan Pisang Besar yang dapat dikunjungi dengan perahu.",
            'location' => "Sumbar",
            'working_days' => "All Day",
            'working_hours' => "24/7",
            'ticket_price' => "30000",
        ]);

        Destination::create([
            'name' => "Jembatan Kelok Sembilan",
            'description' => "Tempat wisata di Sumatera Barat yang tidak kalah menarik yakni Jembatan Kelok Sembilan. Ruas jalan ini menghubungkan antara Riau dan Sumatera Barat. Jalannya meliuk-liuk dan kurang lebih 30 km sebelah timur Kota Payakumbuh.",
            'location' => "Nagari Sarilamak, Kec. Harau, Kab. Lima Puluh Kota, Sumatra Barat.",
            'working_days' => "All Day",
            'working_hours' => "24/7",
            'ticket_price' => "50000",
        ]);

        Destination::create([
            'name' => "Pulau Mandeh",
            'description' => "Mandeh sering disebut sebagai Raja Ampat Sumatera Barat karena kekayaan lautnya yang menawan. Anda bisa snorkeling atau diving menjelajahi keindahan terumbu karang serta keanekaragaman hayati lautnya. Berbagai fasilitas seperti restoran, perlengkapan olahraga air dan penginapan juga tersedia.",
            'location' => "Kabupaten Pesisir Selatan dan berbatasan langsung dengan kota Padang.",
            'working_days' => "All Day",
            'working_hours' => "24/7",
            'ticket_price' => "75000",
        ]);

        Destination::create([
            'name' => "Danau Toba",
            'description' => "Keindahan alam Indonesia juga dapat kamu nikmati saat berkunjung ke Danau Toba yang terletak di wilayah Sumatera Utara. Danau Toba merupakan danau terbesar di Indonesia. Di tengah-tengah danau ini, ada sebuah daratan yang cukup luas yaitu Pulau Samosir.",
            'location' => "Sumatera Utara",
            'working_days' => "All Day",
            'working_hours' => "24/7",
            'ticket_price' => "50000",
        ]);

        Destination::create([
            'name' => "Gunung Bromo",
            'description' => "Gunung Bromo atau dalam bahasa Tengger dieja Brama, juga disebut Kaldera Tengger, adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia.",
            'location' => "Kabupaten Probolinggo, Pasuruan, Lumajang, dan Malang.",
            'working_days' => "All Day",
            'working_hours' => "24/7",
            'ticket_price' => "500000",
        ]);

        for($i = 0; $i <= 5; $i++) {
            Destination::create([
            'name' => fake("id_ID")->name(),
            'description' => fake("id_ID")->sentence(),
            'location' => fake("id_ID")->address() . ", Pekanbaru, Riau",
            'working_days' => "Everyday",
            'working_hours' => "8am - 5pm",
            'ticket_price' => rand(10000, 50000),
        ]);
        }

    }
}
