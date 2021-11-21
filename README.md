<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Cara install project tes-laravel

#### Dibuat dengan :
* [Laravel 8.x](https://laravel.com/docs/8.x)

### Dibuat oleh :
* Randi Gusfirnando

## Tata Cara Menggunakan Project Tes-Laravel ini
* [Mengunduh repository ke dalam komputer](#mengunduh-repository)
* [Membuat Vendor](#membuat-vendor)
* [Merubah .env](#merubah-.env)
* [Membuat Table Migration Laravel](#membuat-table-migration-laravel)
* [Menjalankan Project Menggunakan Laragon](#menjalankan-project-menggunakan-laragon)
* [Cara Lain Menjalankan Project](#cara-lain-menjalankan-project)

### Mengunduh Repository
Unduh repository ke dalam komputer menggunakan perintah `git clone`. Url
repository dapat dilihat di dalam repository yang diinginkan.
```
git clone https://github.com/randigusfirnando/tes-laravel.git
```
### Membuat Vendor
Membuat vendor menggunakan perintah `composer install` atau `composer update`

### Merubah .env
* Duplikat example.env
* Ganti nama hasil duplikat tersebut menjadi .env
* Buat APP_KEY dengan perintah `php artisan key:generate`

### Membuat Table Migration Laravel
* Membuat database dengan nama sesuka anda di MySQL
* Mengganti `DB_DATABASE='nama_database'` dengan nama database yang anda buat di MySQL
* Lakukan migrasi dengan perintah `php artisan migrate` atau bisa menggunakan perintah 'php artisan migrate:fresh'

### Menjalankan Project Menggunakan Laragon
* Jalankan Laragon
* Jalankan Laravel dengan perintah `php artisan serve`

### Cara Lain Menjalankan Project
* Jalankan XAMPP 
* Jalankan Laravel dengan perintah `php artisan serve`
* Kemudian buka di website di `http://localhost:8000/`
