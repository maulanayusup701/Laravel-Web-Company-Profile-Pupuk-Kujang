<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Database\Seeder;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Information::create([
            'about' => 'Informasi keterikatan dalam Kawasan Industri Kujang Cikampek mendasari awal pembentukan sebuah perusahaan yang berfokus kedalam suplai pasokan aliran listrik di Kawasan Industri Kujang Cikampek Berdasarkan surat perjanjian pendirian perusahaan PT Kujang Tatar Persada pada tanggal 17 Januari 2011 no. 259/SP/ KIKC/I/2011 yang dituangkan dalam akta notaris Nova Monaya SH, M.Kn no. 3 tanggal 19 Januari 2011, telah terjadi kesepakatan bersama PT KIKC bersama PT Tatar utilitas Persada untuk mendirikan perusahaan yang bernama PT Kujang Tatar Persada (PT KTP) yang bergerak dibidang penyediaan tenaga listrik untuk kepentingan industri yang berada di kawasan KIKC. Sumber tenaga listrik berasal dari Perum Jasa Tirta II. Penempatan saham PT KIKC sebesar 30% dan PT TUP sebesar 70% dari total Rp250.000.000 yang telah disetor penuh. PT Kujang Tatar Persada mulai beroperasi pada bulan September 2011. KIKC meliputi Kawasan perumahan yang terdapat di dalamnya. Sehingga Web Profil yang kami bangun bisa memberikan pelayanan khusus dari segi keluhan aliran listrik di Kawasan Industri Kujang Cikampek.',
            'visi_misi' => 'Visi dan Misi dari PT Pupuk Kujang yang lain adalah sebagai berikut:
            1. Ingin mensejahterakan Pertanian indonesia
            2. Membangun perekonomian negara melalui pemberdayaan pupuk sebagai
            salah satu jalan untuk penggerak pembangunan.
            3. Memanfaatkan sumber daya untuk kelangsungan habitat lingkungan yang
            sehat.
            4. Memberikan pengenalan tentang bagaimana pentingnya pupuk untuk
            pertanian pada para petani.
            5. Mengolah bahan kimia agar bisa bermanfaat bagi sektor atau unit yang
            membutuhkan.
            74
            6. Memperlancar perekonomian negara dengan pihak luar karena PT Pupuk
            Kujang pun mengekspor hasil dari pengolahan pupuk dan bahan-bahan kimia..'
        ]);
    }
}