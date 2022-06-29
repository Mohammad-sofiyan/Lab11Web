|Mohammad sofiyan | 312010225       |
|-----------------|---------------- |
|     TI.20.A2    |PEMROGRAMAN WEB  |
|   PERTEMUAN 12  |PRAKTIKUM 11     |

Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi
pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan
pengembangan Codeigniter 4.
Berikut beberapa ekstensi yang perlu diaktifkan:
• php-json ekstension untuk bekerja dengan JSON;
• php-mysqlnd native driver untuk MySQL;
• php-xml ekstension untuk bekerja dengan XML;
• php-intl ekstensi untuk membuat aplikasi multibahasa;
• libcurl (opsional), jika ingin pakai Curl.

## 1.Mengaktifkan ekstentsi tersebut, melalu XAMPP Control Panel, pada bagian Apache klik Config -> PHP.ini

![konfig](img/konfig.png)
Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan
diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

## 2.Instalasi Codeigniter 4
Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara
manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara
manual.
![php_ini](img/php_ini.png)
 Aktifkan beberpa extension seperti contoh di atas

 ## 3.KEMUDIAN BUAT FOLDER BARU DENGAN NAMA lab11_php_ci
 ![lab11_php_ci](img/lab11_php_ci.png)
 Buat folder Seperti diatas 

 ## 4). INSTALISASI CODINGITER 4
 Untuk melakukan instalasi codeigniter 4 dapat dilakukan dengan dua cara , yaitu cara manual dan menggunakan composer. pada praktikum ini kita menggunakan cara manual.

Unduh Codeigniter dari website https://codeigniter.com/download
Extrak file zip Codeigniter ke directori htdocs/lab11_ci.
Ubah nama direktory framework-4.x.xx menjadi ci4
Buka browser dengan alamat http://localhost/Lab11Web/lab11_php_ci/ci4/public/
![4](img/4.png)
Codeigniter berhasil didownload dan disimpan file ekstrak nya.

## 5). MENJALANKAN CLI (Command Line Interface)
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt.

![5](img/5.png)
Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (C:\xampp\htdocs\Lab11Web\lab11_php_ci\ci4)

Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah

``` php spark 
```

![6](img/6.png)

php spark berhasil dipanggil

## 6). MENGAKTIFKAN MODE DEBUGGING
Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan erorr apabila terjadi kesalahan membuat kode program.

Secara default fitur ini belum aktif. Ketika terjadi erorr pada aplikasi akan ditampilkan pesan seperti berikut.

![7.](img/7..png)

Semua jenis erorr akan ditampilkan sama. Untuk memudahkan mengetahui jenis erorrnya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRONMENT menjadi development.

![8](img/8.png)
Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable CI_ENVIRONMENT menjadi development.

![9](img/9.png)
Contoh erorr yang terjadi. Untuk mencoba erorr tersebut, ubah kode pada file app/Controller/Home.php hilangkan titik koma pada akhir kode.

![10](img/10.png)
dan akan erorr seperti gambar tampilan browser digambar sebelumnya.

## 7). MEMBUAT ROUTE BARU
Tambahkan kode berikut di dalam Routes.php
``` php
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
```
![11](img/11.png)
Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut.

``` php spark routes
```
![12](img/12.png)
Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url: http://localhost:8080/about

![13](img/13.png)
Ketika diakses akan muncul tampilan erorr 404 file not found, itu artinya file/page tersebut tidak ada. Untuk mengakses halaman tersebut, harus dibuat terlebih dahulu Controller yang sesuai dengan routing yang dibuat yaitu Controller Page.

## 8). MEMBUAT CONTROLLER
Selanjutnya adalah membuat Controller Page. Buat file dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut.

![14](img/14.png)
Refresh kembali browser,maka akan ditampilkan hasilnya seperti diatas,dan halaman sudah dapat di akses.

## 9). AUTO ROUTING
Secara default fitur autoroute pada Codeigniter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variablenya. Untuk menonaktifkan ubah nilai true menjadi false

![15](img/15.png)
Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan alamat url: http://localhost:8080/page/tos/

## 10). MEMBUAT VIEWS
Selanjutnya adalah membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya seperti berikut.
``` html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <h1><?= $title; ?></h1>
    <hr>
    <p><?= $content; ?></p>
</body>
</html>
```
Ubah method about pada class Controller Page menjadi seperti berikut:

![16](img/16.png)
Maka hasil nya akan seperti ini dibrowser

![17](img/17.png)

## 11). MEMBUAT LAYOUT WEB DENGAN CSS
Pada dasarnya layout web dengan css dapat diimplementasikan dengan mudah pada codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public.

Buat file css pada direktori public dengan nama style.css (copy file dari praktikum lab4_layout) Kita akan gunakan layout yang pernah dibuat pada praktikum 4.
![18](img/18.png)

Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php

Seperti dibawah ini

![19](img/19.png)
Dan tambahkan file didalam nya.

## header.php
``` html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>
<body>
    <div id="container">
    <header>
        <h1>Layout Sederhana</h1>
    </header>
    <nav>
        <a href="<?= base_url('/');?>" class="active">Home</a>
        <a href="<?= base_url('/artikel');?>">Artikel</a>
        <a href="<?= base_url('/about');?>">About</a>
        <a href="<?= base_url('/contact');?>">Kontak</a>
    </nav>
    <section id="wrapper">
        <section id="main">
```
## foter.php
``` html
</section>
            <aside id="sidebar">
                <div class="widget-box">
                    <h3 class="title">Widget Header</h3>
                    <ul>
                        <li><a href="#">Widget Link</a></li>
                        <li><a href="#">Widget Link</a></li>
                    </ul>
                </div>
                <div class="widget-box">
                    <h3 class="title">Widget Text</h3>
                    <p>Vestibulum lorem elit, iaculis in nisl volutpat, malesuada
                    tincidunt arcu. Proin in leo fringilla, vestibulum mi porta, faucibus felis.
                    Integer pharetra est nunc, nec pretium nunc pretium ac.</p>
                </div>
            </aside>
        </section>
    <footer>
        <p>&copy; 2022 - Universitas Pelita Bangsa</p>
    </footer>
    </div>
</body>
</html>
```
Kemudian ubah file app/views/about.php seperti berikut
## about.php
```hatml
<?= $this->include('template/header'); ?>

<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>

<?= $this->include('template/footer'); ?>
```
Kemudian refresh dan lihat kembali hasilnya pada browser Maka tampilannya akan seperti berikut.
![20](img/20.png)



|Mohammad sofiyan | 312010225       |
|-----------------|---------------- |
|     TI.20.A2    |PEMROGRAMAN WEB  |
|   PERTEMUAN 13  |PRAKTIKUM 12     |

## Langkah-langkah Praktikum
Persiapan.
Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah
database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan
melalui XAMPP.

## Langkah pertama
## Membuat Database
```mysql
CREATE DATABASE lab_ci4;
```
## Langkah Kedua
Membuat Tabel 
```mysql
CREATE TABLE artikel (
id INT(11) auto_increment,
judul VARCHAR(200) NOT NULL,
isi TEXT,
gambar VARCHAR(200),
status TINYINT(1) DEFAULT 0,
slug VARCHAR(200),
PRIMARY KEY(id)
);
```
## Langkah Ketiga
Membuat Controller
Konfigurasi koneksi database
Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server.
Konfigurasi dapat dilakukan dengan du acara, yaitu pada file app/config/database.php
atau menggunakan file .env. Pada praktikum ini kita gunakan konfigurasi pada file .env. 
```mysql
# database.default.hostname = localhost
# database.default.database = ci4
# database.default.username = root
# database.default.password = 
# database.default.DBDriver = MySQLi
# database.default.DBPrefix =
```
## Langkah KeEmpat
Membuat Model
Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada
direktori app/Models dengan nama ArtikelModel.php 
```php
<?php
namespace App\Models;
use CodeIgniter\Model;
class ArtikelModel extends Model
{
protected $table = 'artikel';
protected $primaryKey = 'id';
protected $useAutoIncrement = true;
protected $allowedFields = ['judul', 'isi', 'status', 'slug', 'gambar'];
}
```
## Langkah Kelima 
Membuat Controller
Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.
```php
<?php
namespace App\Controllers;
use App\Models\ArtikelModel;
class Artikel extends BaseController
{
public function index()
{
    $title = 'Daftar Artikel';
$model = new ArtikelModel();
$artikel = $model->findAll();
return view('artikel/index', compact('artikel', 'title'));
}
}
```

## langkah KeEnam
Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda.
Tambahkan fungsi baru pada Controller Artikel dengan nama view().

![Index](img/Index.png)

```php
<?= $this->include('template/header'); ?>
<?php if($artikel): foreach($artikel as $row): ?>
<article class="entry">
<h2<a href="<?= base_url('/artikel/' . $row['slug']);?>"><?=
$row['judul']; ?></a>
</h2>
<img src="<?= base_url('/gambar/' . $row['gambar']);?>" alt="<?=
$row['judul']; ?>">
<p><?= substr($row['isi'], 0, 200); ?></p>
</article>
<hr class="divider" />
<?php endforeach; else: ?>
<article class="entry">
<h2>Belum ada data.</h2>
</article>
<?php endif; ?>
<?= $this->include('template/footer'); ?>
```
Belum ada data yang di tampilkan. Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.
![Artikel](img/Artikel.png)


## Membuat View Detail
Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.
```php
<?= $this->include('template/header'); ?>
<article class="entry">
<h2><?= $artikel['judul']; ?></h2>
<img src="<?= base_url('/gambar/' . $artikel['gambar']);?>" alt="<?=
$artikel['judul']; ?>">
<p><?= $row['isi']; ?></p>
</article>
<?= $this->include('template/footer'); ?>
```
## Membuat Routing untuk artikel detail
Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel
detail.
```php
$routes->get('/artikel/(:any)', 'Artikel::view/$1');
```
Lalu rifres
![Artikel1](img/Artikel1.png)

## Membuat Menu Admin
Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada
Controller Artikel dengan nama admin_index().
```php
public function admin_index()
{
$title = 'Daftar Artikel';
$model = new ArtikelModel();
$artikel = $model->findAll();
return view('artikel/admin_index', compact('artikel', 'title'));
}
```
Selanjutnya buat view untuk tampilan admin dengan nama admin_index.php
```php
<?= $this->include('template/admin_header'); ?>
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>Judul</th>
<th>Status</th>
<th>AKsi</th>
</tr>
</thead>
<tbody>
<?php if($artikel): foreach($artikel as $row): ?>
<tr>
<td><?= $row['id']; ?></td>
<td>
<b><?= $row['judul']; ?></b>
<p><small><?= substr($row['isi'], 0, 50); ?></small></p>
</td>
<td><?= $row['status']; ?></td>
<td>
<a class="btn" href="<?= base_url('/admin/artikel/edit/' .
$row['id']);?>">Ubah</a>
<a class="btn btn-danger" onclick="return confirm('Yakin
menghapus data?');" href="<?= base_url('/admin/artikel/delete/' .
$row['id']);?>">Hapus</a>
</td>
</tr>
<?php endforeach; else: ?>
<tr>
<td colspan="4">Belum ada data.</td>
</tr>
<?php endif; ?>
</tbody>
<tfoot>
<tr>
<th>ID</th>
<th>Judul</th>
<th>Status</th>
<th>AKsi</th>
</tr>
</tfoot>
</table>
<?= $this->include('template/admin_footer'); ?>
```
Tambahkan routing untuk menu admin seperti berikut:
```php
$routes->group('admin', function($routes) {
$routes->get('artikel', 'Artikel::admin_index');
$routes->add('artikel/add', 'Artikel::add');
$routes->add('artikel/edit/(:any)', 'Artikel::edit/$1');
$routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
});
```
![dafatar_artikel](img/daftar_artikel.png)

## Menambah Data Artikel
Tambahkan fungsi/method baru pada Controller Artikel dengan nama add().
```php
public function add()
{
// validasi data.
$validation = \Config\Services::validation();
$validation->setRules(['judul' => 'required']);
$isDataValid = $validation->withRequest($this->request)->run();
if ($isDataValid)
{
$artikel = new ArtikelModel();
$artikel->insert([
'judul' => $this->request->getPost('judul'),
'isi' => $this->request->getPost('isi'),
'slug' => url_title($this->request->getPost('judul')),
]);
return redirect('admin/artikel');
}
$title = "Tambah Artikel";
return view('artikel/form_add', compact('title'));
}
```
Kemudian buat view untuk form tambah dengan nama form_add.php
```php
<?= $this->include('template/admin_header'); ?>
<h2><?= $title; ?></h2>
<form action="" method="post">
<p>
<input type="text" name="judul">
</p>
<p>
<textarea name="isi" cols="50" rows="10"></textarea>
</p>
<p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>
<?= $this->include('template/admin_footer'); ?>
```
![tambah_artikel](img/tambah_artikel.png)

## Mengubah Data
Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().
```php
public function edit($id)
{
$artikel = new ArtikelModel();
// validasi data.
$validation = \Config\Services::validation();
$validation->setRules(['judul' => 'required']);
$isDataValid = $validation->withRequest($this->request)->run();
if ($isDataValid)
{
$artikel->update($id, [
'judul' => $this->request->getPost('judul'),
'isi' => $this->request->getPost('isi'),
]);
return redirect('admin/artikel');
}
// ambil data lama
$data = $artikel->where('id', $id)->first();
$title = "Edit Artikel";
return view('artikel/form_edit', compact('title', 'data'));
}
```
Kemudian buat view untuk form tambah dengan nama form_edit.php
```php
<?= $this->include('template/admin_header'); ?>
<h2><?= $title; ?></h2>
<form action="" method="post">
<p>
<input type="text" name="judul" value="<?= $data['judul'];?>" >
</p>
<p>
<textarea name="isi" cols="50" rows="10"><?=
$data['isi'];?></textarea>
</p>
<p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>
<?= $this->include('template/admin_footer'); ?>
```
![form_edit](img/form_edit.png)

## Menghapus Data
Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete().
```php
public function delete($id)
{
$artikel = new ArtikelModel();
$artikel->delete($id);
return redirect('admin/artikel');
}
```
|Mohammad sofiyan | 312010225       |
|-----------------|---------------- |
|     TI.20.A2    |PEMROGRAMAN WEB  |
|   PERTEMUAN 14  |PRAKTIKUM 13     |

## Membuat Tabel user
```php
CREATE TABLE user (
id INT(11) auto_increment,
username VARCHAR(200) NOT NULL,
useremail VARCHAR(200),
userpassword VARCHAR(200),
PRIMARY KEY(id)
); 
```
## Membuat Model user
Selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada
direktori app/Models dengan nama UserModel.php
```php
<?php
namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model
{
protected $table = 'user';
protected $primaryKey = 'id';
protected $useAutoIncrement = true;
protected $allowedFields = ['username', 'useremail', 'userpassword'];
}
```
## Membuat Contoller user 
Buat Controller baru dengan nama User.php pada direktori app/Controllers.
Kemudian tambahkan method index() untuk menampilkan daftar user, dan method
login() untuk proses login.
```php
<?php
namespace App\Controllers;
use App\Models\UserModel;
class User extends BaseController
{
public function index()
{
$title = 'Daftar User';
$model = new UserModel();
$users = $model->findAll();
return view('user/index', compact('users', 'title'));
}
public function login()
{
helper(['form']);
$email = $this->request->getPost('email');
$password = $this->request->getPost('password');
if (!$email)
{
return view('user/login');
}
$session = session();
$model = new UserModel();
$login = $model->where('useremail', $email)->first();
if ($login)
{
$pass = $login['userpassword'];
if (password_verify($password, $pass))
{
$login_data = ['user_id' => $login['id'],
'user_name' => $login['username'],
'user_email' => $login['useremail'],
'logged_in' => TRUE,
];
$session->set($login_data);
return redirect('admin/artikel');
}
else
{
$session->setFlashdata("flash_msg", "Password salah.");
return redirect()->to('/user/login');
}
}
else
{
$session->setFlashdata("flash_msg", "email tidak terdaftar.");
return redirect()->to('/user/login');
}
}
}
```
## Membuat view Login
Buat direktori baru dengan nama user pada direktori app/views, kemudian buat file
baru dengan nama login.php.

```php 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>
<body>
<div id="login-wrapper">
<h1>Sign In</h1>
<?php if(session()->getFlashdata('flash_msg')):?>
<div class="alert alert-danger"><?=
session()->getFlashdata('flash_msg') ?></div>
<?php endif;?>
<form action="" method="post">
<div class="mb-3">
<label for="InputForEmail" class="form-label">Email
address</label>
<input type="email" name="email" class="form-control"
id="InputForEmail" value="<?= set_value('email') ?>">
</div>
<div class="mb-3">
<label for="InputForPassword"
class="form-label">Password</label>
<input type="password" name="password"
class="form-control" id="InputForPassword">
</div>
<button type="submit" class="btn
btn-primary">Login</button>
    </form>
</div>
</body>
</html>
```
## Membuat Database Seeder
Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul
login, kita perlu memasukkan data user dan password kedaalam database. Untuk itu buat
database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:

```php 
php spark make:seeder UserSeeder
```
Selanjutnya, buka file UserSeeder.php yang berada di lokasi direktori
/app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:
```php
<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
class UserSeeder extends Seeder
{
public function run()
{
$model = model('UserModel');
$model->insert([
'username' => 'admin',
'useremail' => 'admin@email.com',
'userpassword' => password_hash('admin123', PASSWORD_DEFAULT),
]);
}
}
```
Selanjutnya buka kembali CLI dan ketik perintah berikut:
```php
php spark db:seed UserSeeder
```
![Sign_In](img/Sign_In.png)

## Menambahkan Auth Filter
Selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama Auth.php
pada direktori app/Filters.
```php 
<?php namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
class Auth implements FilterInterface
{
public function before(RequestInterface $request, $arguments = null)
{
// jika user belum login
if(! session()->get('logged_in')){
// maka redirct ke halaman login
return redirect()->to('/user/login');
}
}
public function after(RequestInterface $request, ResponseInterface
$response, $arguments = null)
{
// Do something here
}
}
```
Selanjutnya buka file app/Config/Filters.php tambahkan kode berikut:
```php 
'auth' => App\Filters\Auth::class
```
Selanjutnya buka file app/Config/Routes.php dan sesuaikan kodenya.
```php 
['filter' => 'auth'],
```
Percobaan Akses Menu Admin
Buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut
diakses maka, akan dimuculkan halaman login.

![percobaan_masuk_menu](img/Percobaan_masuk_menu.png)

## Fungsi Logout
Tambahkan method logout pada Controller User seperti berikut:
```php 
public function logout()
{
session()->destroy();
return redirect()->to('/user/login');
}
```
