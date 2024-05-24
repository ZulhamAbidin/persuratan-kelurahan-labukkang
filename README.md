# PERSURATAN ONLINE KELURAHAN STELAN DABOY

Panduan untuk menyiapkan proyek ini dengan menggunakan Composer dan PHP versi 8.1, serta konfigurasi database `surat1`.

## Persyaratan Sistem

Pastikan Anda memiliki persyaratan berikut terpasang di sistem Anda:
- PHP versi 8.1
- Composer
- MySQL atau MariaDB

## Langkah-langkah Instalasi

1. **Unduh Proyek dan Ekstraksi**
   - Unduh proyek dari sumbernya, lalu ekstrak ke direktori `C:/xampp/htdocs/`.

2. **Instalasi Dependensi Menggunakan Composer**
   - Buka terminal di direktori proyek dan jalankan perintah `composer install`.
   - Tunggu beberapa saat hingga Composer selesai mengunduh dan menginstal file vendor yang diperlukan.

3. **Konfigurasi Database**
   - Buka web server (misalnya phpMyAdmin) dan buat database baru dengan nama `surat1`.
   - Impor file SQL yang terdapat di `C:/xampp/htdocs/SIDM/database/surat1.sql` ke dalam database yang baru Anda buat.

4. **Konfigurasi File Konfigurasi**
   - Buka direktori `C:/xampp/htdocs/SIDM/application/config`.
   - Sesuaikan nilai base URL dan nama database sesuai dengan kebutuhan Anda dalam file konfigurasi.

## Kesimpulan

Dengan mengikuti langkah-langkah di atas, Anda sekarang telah berhasil menyiapkan proyek "STELAN DABOY" untuk digunakan. Pastikan untuk memahami setiap langkah dengan baik dan merujuk ke dokumentasi resmi jika diperlukan.
