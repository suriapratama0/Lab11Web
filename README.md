# Pratikum 11,12,13: PHP Framework (Codeigniter)
<h2> PERSIAPAN </h2>
<p> 1. Gunakan text editor, saya menggunakan sublime. </p>
<p> 2. Menggunakan Xampp </p>
<p> 3. Membuat folder baru lab11_php_ci </p>

<p> Diperlukan konfigurasi  pada webserver, mengaktifkan ekstensi PHP intl. buka xampp di apache klik konfigurasi dan buka php.ini </p>

![](Screenshot/2.jpg)

<p> Untuk mengaktifkan extension nya hapus tanda titik kome (;) </p>

![](Screenshot/1.jpg)

<p> langkah selanjutnya unduh codeigniter, extrack filenya dan masukan ke dalam xampp/htdock </p>

![](Screenshot/3.jpg)

<p> Bukalah localhost:8080 di browser. </p>

![](Screenshot/4.1.jpg)

<p> Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt.  </p>
<p> dan gunakan "php spark" </p>

![](Screenshot/4.2.jpg)

<p> Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program. 
Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.  </p>

![](Screenshot/5.jpg)

<p> Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRINMENT menjadi development. </p>

![](Screenshot/6.2.jpg)

![](Screenshot/6.1.jpg)

<p> Dan ini hasil errornya </p>

![](Screenshot/7.jpg)

# PENJELASAN TENTANG DIREKTORI CODEIGNETER
* .github folder ini kita butuhkan untuk konfigurasi repo github, seperti konfigurasi untuk build dengan github action; 
* app folder ini akan berisi kode dari aplikasi yang kita kembangkan; 
* public folder ini berisi file yang bisa diakses oleh publik, seperti file index.php, robots.txt, favicon.ico, ads.txt, dll; 
* tests folder ini berisi kode untuk melakukan testing dengna PHPunit; 
* vendor folder ini berisi library yang dibutuhkan oleh aplikasi, isinya juga termasuk kode core dari system CI. 
* writable folder ini berisi file yang ditulis oleh aplikasi. Nantinya, kita bisa pakai untuk menyimpan file yang di-upload, logs, session, dll. 

<h2> Sedangkan file-file yang berada pada root direktori CI sebagai berikut. </h2> 

* .env adalah file yang berisi variabel environment yang dibutuhkan oleh aplikasi. 
* .gitignore adalah file yang berisi daftar nama file dan folder yang akan diabaikan oleh Git. 
* build adalah script untuk mengubah versi codeigniter yang digunakan. Ada versi release (stabil) dan development (labil). 
* composer.json adalah file JSON yang berisi informasi tentang proyek dan daftar library yang dibutuhkannya. File ini digunakan oleh Composer sebagai acuan. 
* composer.lock adalah file yang berisi informasi versi dari libraray yang digunakan aplikasi. 
* license.txt adalah file yang berisi penjelasan tentang lisensi Codeigniter; 
* phpunit.xml.dist adalah file XML yang berisi konfigurasi untuk PHPunit. 
* README.md adalah file keterangan tentang codebase CI. Ini biasanya akan dibutuhkan pada repo github atau gitlab. 
* spark adalah program atau script yang berfungsi untuk menjalankan server, generate kode, dll.

<h2>  Folder app, dimana folder tersebut adalah area kerja kita untuk membuat aplikasi. Dan folder public untuk menyimpan aset web seperti css, gambar, javascript, dll. </h2>

<h2> Pada folder app, dimana folder tersebut adalah area kerja kita untuk membuat aplikasi. Dan folder public untuk menyimpan aset web seperti css, gambar, javascript, dll. </h2>

# Memahami Konsep MVC 
<p> Codeigniter menggunakan konsep MVC. MVC meripakan singkatan dari Model-View-Controller. MVC merupakan konsep arsitektur yang umum digunakan dalam pengembangan aplikasi. Konsep MVC adalah memisahkan kode program berdasarkan logic proses, data, dan tampilan. Untuk logic proses diletakkan pada direktori Contoller, Objek data diletakkan pada direktori Model, dan desain tampilan diletakkan pada direktori View. </p>

<p> Codeigniter menggunakan konsep pemrograman berorientasi objek dalam mengimplementasikan konsep MVC. </p>

<h2> Model </h2> 
<p> merupakan kode program yang berisi pemodelan data. Data dapat berupa database ataupun sumber lainnya. </p>

<h2> View </h2> 
<p> merupakan kode program yang berisi bagian yang menangani terkait tampilan user interface sebuah aplikasi. didalam aplikasi web biasanya pasti akan berhubungan dengan html dan css. </p>

<h2> Controller </h2>
<p> merupakaan kode program yang berkaitan dengan logic proses yang menghubungkan antara view dan model. Controller berfungsi untuk menerima request dan data dari user kemudian diproses dengan menghubungkan bagian model dan view. </p>

<h2> Routing dan Controller </h2>
<p> Routing merupakan proses yang mengatur arah atau rute dari request untuk menentukan fungsi/bagian mana yang akan memproses request tersebut. Pada framework CI4, routing bertujuan untuk menentukan Controller mana yang harus merespon sebuah request. Controller adalah class atau script yang bertanggung jawab merespon sebuah request. </p> 

<h2> Pada Codeigniter, request yang diterima oleh file index.php akan diarahkan ke Router untuk meudian oleh router tesebut diarahkan ke Controller.  </h2>

<h2> Router terletak pada file app/config/Routes.php </h2>

<p> Membuat Route </p>

![](Screenshot/9.jpg)

<p> Memeriksa penambahan route di CLI dengan perintah "php spark routes"

![](Screenshot/10.jpg)
  
<p> Mengakses file about.php akan terlihat seperti berikut , karena tidak ada isinya. </p>

![](Screenshot/11.jpg)

<p> Membuat controller dengan nama file page.php </p>

![](Screenshot/12.jpg)

<p> Hasil yang di tampilkan sebagai berikut </p>

![](Screenshot/13.jpg)

<p> Membuat method baru controoller page </p>

![](Screenshot/14.jpg)

<p> Ini hasilnya. </p>

![](Screenshot/15.jpg)

<p> Membuat view about.php app/view/about.php </p>

![](Screenshot/16.jpg)

<p> Mengubah method about pada class Controller Page menjadi seperti ini </p>

![](Screenshot/17.jpg)

<p> Ini hasilnya. </p>

![](Screenshot/18.jpg)

<p> Membuat CSS pada pratikum ke 4</p>

![](Screenshot/19.jpg)

<p> Membuat file Header dengan Folder template/view/header.php </p>

![](Screenshot/20.jpg)

<p> Membuat file footernya juga </p>

![](Screenshot/21.jpg)

<p> Dan kemudian mengubah file about.php pada app/view/about.php </p>

![](Screenshot/22.jpg)

<p> Ini hasilnya </p>

![](Screenshot/23.jpg)

# Pertanyaan dan Tugas 
<p> Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama. </p>

<p> Membuat file contact.php, faqs.php, tos.php seperti berikut. </p>

![](Screenshot/31.jpg)

<p> membuat sourch code seperti berikut pada file app/Controllers  </p>

![](Screenshot/32.jpg)

<p> Ini hasilnya </p>

![](Screenshot/33.jpg)

![](Screenshot/34.jpg)

![](Screenshot/35.jpg)

# Pratikum ke 12

<p> Membuat table dan database.
  
![](100a.jpg)

<p> Konfigurasi dengan database server dengan mensetting file app/config/database.php </p>

![](Screenshot/100.jpg)

<p> Membuat model untuk mengakses artikel. </p>

![](Screenshot/101.jpg)

<p> Membuat controller artikel.php </p>

![](Screenshot/102.jpg)

<p> Membuat folder baru di dalam app/views dan membuat file baru dengan nama index.php. </p>

![](Screenshot/103.jpg)

<p> Hasil Outputnya </p>

![](Screenshot/104.jpg)

<p> Menambahkan data ke dalam tabel artikel. </p>

![](Screenshot/105.jpg)

<p> Hasil outputnya. </p>

![](Screenshot/106.jpg)

<p> Membuat tampilan detail artikel dengan menambahkan fungsi baru pada controller/Artikel.php </p>

![](Screenshot/107.jpg)

<p> Membuat view detail.php di direktori app/views/artikel/detail.php </p>

![](Screenshot/108.jpg)

<p> Membuat routing untuk artikel detail di app/config/Routes.php </p>

![](Screenshot/109.jpg)

<p> Membuat menu untuk proses CRUD dan membuat method baru pada controllers/Artikel.php </p>

![](Screenshot/110.jpg)

<p> Membuat views/artikel/admin_index.php untuk tampilan admin. </p>

![](Screenshot/111.jpg)

<p> Menambahkan routing pada menu admin. berada di file app/Config/Routes. </p>

![](Screenshot/112.jpg)

<p> Hasil outputnya. </p>

![](Screenshot/113.jpg)

<p> CRUD Menambah data pada artikel, di direktori app/Controllers/Artikel.php </p>

![](Screenshot/114.jpg)

<p> Membuat form tambah di direktori app/views/artikel/form_add.php </p>

![](Screenshot/115.jpg)

<p> Hasil Outputnya. </p>

![](Screenshot/116.jpg)

<p> Menambahkan fungsi method untuk ubah data artikel di direktori app/Controller/Artikel.php </p>

![](Screenshot/117.jpg)

<p> Membuat form ubah yang sudah terisi data sebelumnya. </p>

![](Screenshot/118.jpg)

<p> Hasil outputnya. </p>

![](Screenshot/119.jpg)

<p> Membuat penghapusan data, dengan menambahkan fungsi/method pada direktori app/Controllers/Artikel.php </p>

![](Screenshot/120.jpg)


# Pratikum 13

<p> Membuat table user </p>

![](Screenshot/200.jpg)

<p> Membuat model user app/Models/UserModel.php </p>

![](Screenshot/201.jpg)

<p> Membuat controller user app/Controllers User.php </p>

![](Screenshot/202.jpg)

<p> Membuat view login app/views/login.php </p>

![](Screenshot/203.jpg)

<p> Membuat database seeder app/Database/Seeds/UserSeeder.php </p>

![](Screenshot/204.jpg)

![](Screenshot/205.jpg)

![](Screenshot/206.jpg)

<p> Output Loginnya </p>

![](Screenshot/207.jpg)

<p> Menambahkan Auth Filter app/Filters/Auth.php </p>

![](Screenshot/208.jpg)

<p> Tambahkan config auth app/Config/Filters.php </p>

![](Screenshot/209.jpg)

<p> Ubah routes app/Config/Routes.php </p>

![](Screenshot/210.jpg)

<p> Percobaan output login h.ttp://localhost:8080/admin/artikel dan akan muncul halaman login </p>

![](Screenshot/207.jpg)

<p> Fungsi logout </p>

![](Screenshot/211.jpg)
# Lab11Web
