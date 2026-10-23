# UTS Rekayasa Web - Rental Kamera

Paket berisi file aplikasi untuk tema Rental Kamera (digit terakhir NIM 3), dengan 10 kamera pada empat jenis. Nama mahasiswa: Al Khafian, NIM 251011700923. Nama website: **Lensa Josjis Mantap**. Slogan: “Mau Kamera bagus? Sewa di Lensa Josjis Mantap”.

## Mulai dari awal

1. Pastikan PHP 8.3 atau lebih baru, Composer, MySQL, dan Laragon/XAMPP sudah tersedia. PHP 8.4 dan Composer sudah terdeteksi di komputer tempat paket ini disiapkan.
2. Buka Terminal/PowerShell di folder tempat Anda menyimpan proyek, lalu jalankan:

   ```powershell
   composer create-project laravel/laravel UTS_251011700923 "^13.0"
   cd UTS_251011700923
   ```

   Jika Composer mengatakan Laravel 13 belum tersedia untuk PHP yang Anda pakai, kirimkan pesan errornya sebelum mengganti versi. Soal meminta Laravel 13.

3. Buat database MySQL bernama `db_uts_251011700923` melalui phpMyAdmin atau MySQL. Pada `.env`, atur koneksi seperti ini (sesuaikan username/password lokal Anda):

   ```dotenv
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_uts_251011700923
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. Salin isi folder paket ini ke folder proyek Laravel `UTS_251011700923`, pertahankan struktur folder, dan pilih **Replace** untuk file yang memang disebut di paket (khususnya `routes/web.php` dan `database/seeders/DatabaseSeeder.php`). Jangan menimpa `.env` Laravel.
5. Unduh Bootstrap 5.3 dari situs resmi Bootstrap. Salin `bootstrap.min.css` ke `public/Bootstrap/css/bootstrap.min.css` dan `bootstrap.bundle.min.js` ke `public/Bootstrap/js/bootstrap.bundle.min.js`.
6. Dari terminal di folder proyek jalankan:

   ```powershell
   php artisan migrate:fresh --seed
   php artisan serve
   ```

   `migrate:fresh` menghapus tabel proyek ini lalu membuatnya kembali. Jalankan hanya pada database UTS ini.
7. Buka `http://127.0.0.1:8000`, periksa halaman daftar, semua filter tipe, dan halaman detail.

## File yang perlu disesuaikan

- `public/Bootstrap/` diisi file Bootstrap lokal yang diunduh, sesuai prosedur soal.
- Ganti gambar SVG contoh di `public/assets/images/` dengan foto kamera yang Anda pilih jika ingin memakai foto produk.
- Ganti nilai `KODE_KELAS` pada identitas dokumentasi/nama repo dengan kode kelas sebenarnya. Jangan mengarang kode kelas.

## Pengumpulan

1. **Periksa aplikasi.** Jalankan `php artisan serve`, buka `http://127.0.0.1:8000`, lalu ambil screenshot halaman katalog dan satu halaman detail produk. Pastikan gambar, harga, filter, navbar, dan tombol detail terlihat. Soal/gambar meminta satu tampilan per halaman Word.
2. **Buat repository GitHub.** Masuk ke GitHub, buat repository baru dengan nama `UTS_AlKhafian_251011700923_KODEKELAS`, pilih **Public**, dan jangan mengunggah folder `vendor`. Dari terminal proyek jalankan:

   ```powershell
   git init
   git add .
   git commit -m "Buat aplikasi UTS rental kamera"
   git branch -M main
   git remote add origin https://github.com/USERNAME/UTS_AlKhafian_251011700923_KODEKELAS.git
   git push -u origin main
   ```

   Ganti `KODEKELAS` dan `USERNAME` dengan nilai sebenarnya. Setelah perubahan berikutnya, jalankan `git add .`, `git commit -m "Perbarui aplikasi UTS"`, lalu `git push`.
3. **Rekam video demonstrasi.** Rekam layar saat membuka katalog, mencoba filter/pencarian, membuka detail kamera, lalu kembali ke katalog. Simpan video di Google Drive dan atur akses link supaya dosen dapat melihatnya.
4. **Susun dokumentasi Word.** Isi nama Al Khafian, NIM 251011700923, kode kelas, judul “Rental Kamera”, tautan repository, tautan video Drive, lalu masukkan screenshot. Atur satu tampilan per halaman. Simpan Word untuk dokumentasi, kemudian ekspor/simpan sebagai PDF.
5. **Periksa PDF akhir.** Dokumen ketentuan meminta hanya satu berkas PDF bernama `UTS_RekayasaWeb_251011700923_AlKhafian.pdf`, yang memuat identitas, tautan GitHub, tautan Drive, dan screenshot website tersusun jelas. Buka PDF hasil ekspor untuk memastikan link dan gambar masih terbaca.
6. **Kirim email sendiri** ke `afif@unpam.ac.id`, lampirkan PDF, dan gunakan subject yang diminta dokumen ketentuan: `UTS Rekayasa Web - Kode Kelas`. Pastikan subject berisi kode kelas sebenarnya dan kirim sebelum koreksi dimulai.

Jangan mengirim sebelum link repo/video dan PDF sudah diperiksa. Kode kelas belum diberikan, jadi ganti semua `KODEKELAS` sebelum membuat repo dan email.

Panduan soal juga meminta dokumentasi Word, sedangkan gambar pengumuman menyebut screenshot dimasukkan ke Word. Karena ada perbedaan format, siapkan Word berisi identitas, tautan, dan screenshot satu tampilan per halaman, lalu ekspor Word itu menjadi satu PDF untuk berkas akhir sesuai dokumen ketentuan pengumpulan. Gambar pengumuman juga menyebut source code di Google Drive, sedangkan soal dan dokumen pengumpulan menyebut GitHub; utamakan tautan GitHub Public pada PDF dan tanyakan kepada dosen bila diwajibkan juga mengirim salinan source di Drive.

Dokumen pengumpulan mencantumkan alamat `afif@unpam.ac.id` dan subject `UTS Rekayasa Web - Kode Kelas`. Gambar pengumuman menuliskan subject `UTS REKAYASA WEB KODE KELAS` dan menyebut email dikirim sebelum koreksi dimulai. Cocokkan subject yang akan dipakai dengan arahan kelas. Jangan mengirim sebelum link repo/video dan PDF sudah diperiksa.

Nama repository yang mengikuti pola soal: `UTS_AlKhafian_251011700923_KODEKELAS`.

