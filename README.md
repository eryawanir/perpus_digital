### Persiapan
1. Siapkan Database
2. Sesuaikan nama database [ DB_DATABASE ] di config .env 
3. Jalankan Mysql
4. Jalankan migrasi untuk buat database dari laravel (persiapan membuat auth dari laravel)
```
php artisan migrate
```
5. Jalankan laravel
```
php artisan serve
```
### Membuat Auth dari Laravel  
hanya untuk login dan register
1. Tambahkan package(composer) laravel/ui
```
composer require laravel/ui
```
2. Instalasi Laravel UI framework Bootstrapp CSS dan Laravel Authentication
```
php artisan ui bootstrap --auth
```
3. Hasil dari instalasi ini kita akan mendapatkan views app.blade.php, pada file tersebut terdapat directive @vite. Directive itu akan mengolah asset frontend mengunakan tools Laravel Vite. Maka dari itu untuk membaca script tersebut perlu menginstal dan mengaktifkan Laravel Vite dengan cara
  - Menginstall package
```
npm run install
```
  - Menjalankan package saat dalam masa pembuatan web
```
npm run dev
```
4. silahkan coba register dan login di pojok kanan atas http://127.0.0.1:8000/  

### Menambah Template Admin LTE
penggunaan template menggunakan cara manual tidak menggunakan laravel vite  
1. Copy file css js admin lte langsung di folder public
2. Buat layout dengan menyalin template halaman admin lte di resource/views
3. Bagi Layout sesuai keinginan untuk mempermudah pengembangan menggunakan directive yg disediakan laravel
4. View auth yg digenerate laravel diganti dengan view dari admin lte
5. Atur view login/register di controller. Atur dgn menimpa mehod show/register loginform   
*!! semua yg divendor folder tidak bisa dirubah !!*    
https://laraveldaily.com/post/9-things-you-can-customize-in-laravel-registration  



