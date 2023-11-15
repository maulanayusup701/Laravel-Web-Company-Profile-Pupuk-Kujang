<p>Deskripsi:</p>

Proyek ini merupakan sebuah situs Company Profile yang didedikasikan untuk salah satu perusahaan di Karawang sebagai bagian dari tugas akhir mahasiswa. Situs ini bertujuan untuk memperkenalkan perusahaan tersebut kepada masyarakat luas dengan fokus pada fitur keluhan layanan pelanggan secara online.

Melalui situs ini, masyarakat dapat mengakses informasi lengkap tentang perusahaan, termasuk sejarah, visi, misi, nilai-nilai perusahaan, serta layanan unggulan yang ditawarkan. Dengan demikian, situs ini bertujuan untuk menciptakan pemahaman yang lebih baik mengenai perusahaan dan mengedukasi pengunjung tentang kontribusi perusahaan dalam industri atau bidang usahanya.

Salah satu fitur utama yang diunggulkan dalam situs ini adalah kemudahan bagi pelanggan untuk menyampaikan keluhan atau masalah terkait layanan melalui sistem keluhan pelanggan secara online. Hal ini bertujuan untuk memberikan pelayanan yang lebih baik dan responsif terhadap kebutuhan dan masukan dari pelanggan, serta meningkatkan kepuasan pelanggan secara keseluruhan.

Dalam pengembangan situs ini, akan diperhatikan tampilan yang menarik dan responsif agar pengalaman pengguna lebih optimal, termasuk penggunaan teknologi terkini agar situs dapat diakses dengan baik dari berbagai perangkat, termasuk ponsel pintar dan tablet.

Diharapkan bahwa proyek ini dapat memberikan manfaat bagi perusahaan dengan meningkatkan eksposur dan citra positif di kalangan masyarakat. Selain itu, fitur keluhan pelanggan secara online diharapkan dapat membantu perusahaan dalam meningkatkan kualitas layanan mereka dan menjaga hubungan yang baik dengan pelanggan yang telah menjadi bagian penting dari kesuksesan perusahaan ini.

<p>Teknologi yang digunakan:<p>

-   Laravel 10
-   mySQL
-   Bootstrap 5.2.x
-   Trix-editor</p>

<p>Prasyarat:</p>

-   Git https://git-scm.com/
-   PHP ^8.2, Mysql
-   Composer https://getcomposer.org/

<p>Cara Install Project:</p>

-   Download atau clone project => $git clone https://github.com/maulanayusup701/Laravel-Web-Company-Profile-Pupuk-Kujang.git
-   Buka folder project dan buka gitbash
-   Install dependency => $composer install
-   Setup environt variabel dengan mengcopy file .env => $cp .env.example .env
-   Buka file .env kemudian isi DB_DATABASE dengan nama db_project
-   Buat DB db_project di mysql
-   Generate APP_KEY => $php artisan key:generate
-   Lakukan migrate dan seed => $php artisan migrate --seed
-   Hubungkan Storage => $php artisan storage:link
-   Start server => $php artisan serve

<p>Akun Admin :</p> 
+   https://127.0.0.1:8000/login<br>
-   username = admin<br>
-   Password = admin