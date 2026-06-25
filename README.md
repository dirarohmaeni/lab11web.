# 📚 Praktikum 5 - Layout, View, dan CSS

## 📖 Deskripsi

Pada praktikum ini dilakukan pembuatan tampilan website menggunakan konsep **Layout** pada CodeIgniter 4. Layout digunakan agar halaman memiliki struktur yang konsisten, seperti Header, Navigation, Content, dan Footer sehingga kode menjadi lebih rapi dan mudah dikelola.

Selain itu dilakukan penambahan file **CSS** untuk mempercantik tampilan website sehingga lebih menarik dan responsif.

---

## 🎯 Tujuan

- Memahami penggunaan View pada CodeIgniter 4.
- Menerapkan konsep Layout agar tampilan lebih terstruktur.
- Memisahkan Header, Content, dan Footer.
- Menggunakan CSS untuk memperindah tampilan website.

---

## 🛠 Materi Praktikum

- View
- Layout
- CSS
- Routing
- Asset Management

---

## 📂 File yang Digunakan

```
app/
│
├── Views/
│   ├── layout/
│   │   ├── header.php
│   │   └── footer.php
│   │
│   ├── home.php
│   ├── about.php
│   └── contact.php
│
public/
│
└── style.css
```

---

## ✨ Fitur

- Layout Header
- Layout Footer
- Navigasi Menu
- CSS Styling
- Responsive Layout

---

## 📸 Dokumentasi

Screenshot yang diunggah:

- Halaman Home
- Halaman About
- Halaman Contact
- Tampilan Layout
- CSS Website

---

# 📚 Praktikum 6 - Framework Lanjutan dan Database

## 📖 Deskripsi

Praktikum ini membahas penggunaan Database MySQL pada CodeIgniter 4. Data artikel disimpan ke dalam database menggunakan Model sehingga aplikasi dapat melakukan operasi CRUD (Create, Read, Update, Delete).

---

## 🎯 Tujuan

- Memahami koneksi database.
- Membuat Model.
- Menampilkan data dari database.
- Mengelola data menggunakan CRUD.

---

## 🛠 Materi

- Database MySQL
- Model
- Query Builder
- CRUD

---

## 📂 File yang Digunakan

```
app/

├── Controllers/
│      Artikel.php
│
├── Models/
│      ArtikelModel.php
│
└── Views/
       artikel/
```

---

## ✨ Fitur

- Menampilkan Artikel
- Tambah Artikel
- Edit Artikel
- Hapus Artikel
- Detail Artikel

---

## 📸 Dokumentasi

Screenshot:

- Daftar Artikel
- Tambah Artikel
- Edit Artikel
- Hapus Artikel
- Database phpMyAdmin

---

# 📚 Praktikum 7 - Upload Gambar dan Pagination

## 📖 Deskripsi

Praktikum ini membahas proses upload gambar ke server serta implementasi pagination agar data artikel dapat ditampilkan secara bertahap sehingga lebih mudah dibaca.

---

## 🎯 Tujuan

- Memahami Upload File.
- Mengimplementasikan Pagination.
- Mengelola File Gambar.

---

## 🛠 Materi

- Upload Image
- Validation
- Pagination
- File Handling

---

## 📂 File yang Digunakan

```
Controllers/
Artikel.php

Models/
ArtikelModel.php

Views/
form_add.php
form_edit.php
admin_index.php

public/
gambar/
```

---

## ✨ Fitur

- Upload Cover Artikel
- Validasi Upload
- Pagination Artikel
- Preview Gambar

---

## 📸 Dokumentasi

Screenshot:

- Form Upload
- Hasil Upload
- Pagination
- Data Artikel

---

# 📚 Praktikum 8 - Login dan Session

## 📖 Deskripsi

Praktikum ini membahas proses autentikasi pengguna menggunakan Session pada CodeIgniter 4. User harus login terlebih dahulu sebelum dapat mengakses halaman administrator.

---

## 🎯 Tujuan

- Memahami Session.
- Membuat Login.
- Membuat Logout.
- Mengamankan Halaman Admin.

---

## 🛠 Materi

- Session
- Login
- Logout
- Authentication

---

## 📂 File

```
Controllers/
User.php

Models/
UserModel.php

Views/
user/login.php

Filters/
Auth.php
```

---

## ✨ Fitur

- Login
- Logout
- Session
- Redirect Login
- Filter Auth

---

## 📸 Dokumentasi

Screenshot:

- Form Login
- Login Berhasil
- Dashboard Admin
- Logout

---

# 📚 Praktikum 9 - Relasi Database dan Kategori

## 📖 Deskripsi

Pada praktikum ini dilakukan implementasi relasi antar tabel menggunakan foreign key sehingga setiap artikel memiliki kategori masing-masing.

---

## 🎯 Tujuan

- Memahami Relasi Database.
- Menggunakan Foreign Key.
- Menampilkan Nama Kategori pada Artikel.

---

## 🛠 Materi

- Relasi Database
- JOIN
- Foreign Key
- Dropdown Kategori

---

## 📂 File

```
Models/
KategoriModel.php
ArtikelModel.php

Controllers/
Artikel.php

Views/
form_add.php
form_edit.php
```

---

## ✨ Fitur

- CRUD Kategori
- Dropdown Kategori
- Relasi Artikel-Kategori
- JOIN Database

---

## 📸 Dokumentasi

Screenshot:

- Database Relasi
- Form Tambah Artikel
- Dropdown Kategori
- Data Artikel

---

# 📚 Praktikum 10 - AJAX dan REST API

## 📖 Deskripsi

Praktikum ini membahas penggunaan AJAX untuk mengambil data secara asynchronous tanpa me-refresh halaman serta pengenalan REST API menggunakan CodeIgniter 4.

---

## 🎯 Tujuan

- Memahami AJAX.
- Menggunakan JSON.
- Mengimplementasikan REST API.

---

## 🛠 Materi

- AJAX
- JSON
- REST API
- Axios

---

## 📂 File

```
Controllers/
AjaxController.php
Post.php

Views/
ajax/

Routes.php
```

---

## ✨ Fitur

- AJAX Request
- JSON Response
- Menampilkan Data Tanpa Refresh
- REST API Sederhana

---

## 📸 Dokumentasi

Screenshot:

- Halaman AJAX
- JSON Response
- REST API
- Testing Browser

---

# 📚 Praktikum 11 - REST API Menggunakan CodeIgniter 4

## 📖 Deskripsi

Pada praktikum ini dikembangkan sebuah **REST API** menggunakan CodeIgniter 4 untuk mengelola data artikel. API dibangun menggunakan `ResourceController` sehingga mendukung operasi CRUD (Create, Read, Update, Delete) melalui HTTP Request.

REST API ini kemudian digunakan sebagai backend yang akan diakses oleh aplikasi frontend menggunakan Axios.

---

## 🎯 Tujuan

- Memahami konsep REST API.
- Membuat API menggunakan ResourceController.
- Mengimplementasikan HTTP Method.
- Melakukan pengujian menggunakan Postman.

---

## 🛠 Materi

- REST API
- ResourceController
- HTTP Request
- HTTP Response
- JSON
- Postman

---

## 📂 File yang Digunakan

```
app/

├── Controllers/
│      Post.php
│
├── Models/
│      ArtikelModel.php
│
└── Config/
       Routes.php
```

---

## ✨ Fitur

- GET Semua Artikel
- GET Detail Artikel
- POST Tambah Artikel
- PUT Edit Artikel
- DELETE Hapus Artikel
- Response JSON

---

## 🌐 Endpoint REST API

### Menampilkan Semua Artikel

```
GET /post
```

### Menampilkan Detail Artikel

```
GET /post/{id}
```

### Menambahkan Artikel

```
POST /post
```

### Mengubah Artikel

```
PUT /post/{id}
```

### Menghapus Artikel

```
DELETE /post/{id}
```

---

## 📸 Dokumentasi

Screenshot yang disertakan:

- GET Artikel
- GET Detail
- POST Artikel
- PUT Artikel
- DELETE Artikel
- Pengujian menggunakan Postman

---

# 📚 Praktikum 12 - VueJS Single Page Application (SPA)

## 📖 Deskripsi

Pada praktikum ini dibuat aplikasi frontend menggunakan VueJS 3 dengan konsep **Single Page Application (SPA)**. Vue Router digunakan untuk mengatur perpindahan halaman tanpa melakukan refresh browser.

Frontend diintegrasikan dengan REST API yang telah dibuat pada Praktikum 11 menggunakan Axios.

---

## 🎯 Tujuan

- Memahami konsep SPA.
- Menggunakan Vue Router.
- Menghubungkan VueJS dengan REST API.
- Menampilkan data dari backend.

---

## 🛠 Materi

- VueJS 3
- Vue Router
- Axios
- Bootstrap 5
- SPA

---

## 📂 Struktur Frontend

```
vue/

├── assets/
│   ├── css/
│   │      style.css
│   │
│   └── js/
│       ├── components/
│       │      Home.js
│       │      Artikel.js
│       │      About.js
│       │      Login.js
│       │
│       └── app.js
│
└── index.html
```

---

## ✨ Fitur

- Home
- About
- Kelola Artikel
- Vue Router
- Axios
- Bootstrap Modal
- CRUD Artikel

---

## 📸 Dokumentasi

Screenshot:

- Halaman Home
- Halaman About
- Halaman Kelola Artikel
- Tambah Artikel
- Edit Artikel
- Hapus Artikel

---

# 📚 Praktikum 13 - Integrasi REST API dengan VueJS

## 📖 Deskripsi

Pada praktikum ini dilakukan integrasi penuh antara aplikasi frontend VueJS dengan backend CodeIgniter 4 menggunakan Axios. Seluruh proses CRUD dilakukan melalui REST API sehingga data dapat ditampilkan secara dinamis tanpa melakukan refresh halaman.

---

## 🎯 Tujuan

- Menghubungkan VueJS dengan REST API.
- Menggunakan Axios.
- Membuat CRUD secara asynchronous.
- Menampilkan data secara realtime.

---

## 🛠 Materi

- Axios
- REST API
- CRUD
- Bootstrap Modal
- JSON

---

## ✨ Fitur

- Menampilkan Artikel
- Tambah Artikel
- Edit Artikel
- Hapus Artikel
- Refresh Data Otomatis

---

## 📸 Dokumentasi

Screenshot:

- Daftar Artikel
- Form Tambah Artikel
- Artikel Berhasil Ditambahkan
- Form Edit Artikel
- Artikel Berhasil Diubah
- Artikel Berhasil Dihapus

---

# 📚 Praktikum 14 - Authentication & Authorization REST API

## 📖 Deskripsi

Pada praktikum ini dilakukan implementasi sistem autentikasi menggunakan Login API. Setelah pengguna berhasil login, token disimpan pada Local Storage dan secara otomatis dikirim melalui Axios Interceptor pada setiap request menuju REST API.

Selain itu, dibuat Route Guard sehingga halaman tertentu hanya dapat diakses oleh pengguna yang telah melakukan login.

---

## 🎯 Tujuan

- Membuat Login API.
- Menggunakan Local Storage.
- Menggunakan Axios Interceptor.
- Mengimplementasikan Authorization Header.
- Mengamankan Endpoint REST API.

---

## 🛠 Materi

- Login API
- Authentication
- Authorization
- Axios Interceptor
- Bearer Token
- Route Guard

---

## ✨ Fitur

- Login User
- Logout
- Session Login
- Protected Route
- Authorization Header
- Axios Interceptor
- CRUD Setelah Login

---

## 🔄 Flow Sistem

```
User Login
      │
      ▼
REST API Login
      │
      ▼
Validasi User
      │
      ▼
Token Disimpan
(Local Storage)
      │
      ▼
Axios Interceptor
      │
      ▼
Authorization Header
      │
      ▼
REST API CRUD
```

---

## 📸 Dokumentasi

Screenshot yang disertakan:

### Login

- Halaman Login
- Login Berhasil

### Authorization

- Authorization Header
- Bearer Token
- Axios Interceptor

### CRUD

- Tambah Artikel
- Edit Artikel
- Hapus Artikel

### Pengujian

- Login API menggunakan Postman
- GET Data Artikel
- POST Data Artikel
- PUT Data Artikel
- DELETE Data Artikel

---

# 🚀 Cara Menjalankan Project

## Clone Repository

```bash
git clone https://github.com/username/LAB11_CI.git
```

## Masuk ke Folder Project

```bash
cd LAB11_CI
```

## Install Dependency

```bash
composer install
```

## Jalankan Server

```bash
php spark serve
```

## Jalankan Frontend Vue

Buka browser:

```
http://localhost:8080/vue/index.html
```

---

# 💻 Teknologi yang Digunakan

- PHP 8
- CodeIgniter 4
- MySQL
- Bootstrap 5
- VueJS 3
- Vue Router
- Axios
- REST API
- JSON
- Postman
- Git
- GitHub

---

# 📸 Daftar Screenshot Repository

```
screenshots/

p5-home.png
p5-layout.png

p6-crud.png
p6-tambah.png
p6-edit.png
p6-hapus.png

p7-upload.png
p7-pagination.png

p8-login.png
p8-dashboard.png
p8-logout.png

p9-kategori.png
p9-relasi.png

p10-ajax.png
p10-json.png

p11-get.png
p11-post.png
p11-put.png
p11-delete.png
p11-postman.png

p12-home.png
p12-about.png
p12-artikel.png

p13-tambah.png
p13-edit.png
p13-hapus.png

p14-login.png
p14-login-success.png
p14-authorization.png
p14-postman-login.png
p14-crud.png
```

---

# 👨‍💻 Penulis

**Dira Rohmaeni**

Semester 4 – Pemrograman Web 2

Project ini dibuat sebagai tugas praktikum mata kuliah **Pemrograman Web 2** menggunakan Framework **CodeIgniter 4**, **REST API**, dan **VueJS SPA**.
