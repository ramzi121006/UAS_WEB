# UAS_WEB

**Nama                  : Muhamad Valentino Ramzi** 

**Kelas                 : TI.24.A.5** 

**Matkul                : Pemrograman Web 1**

**Dosen Pengampu        : Agung Nugroho S.Kom.,M.Kom**

---

**📝 Judul Project**

Aplikasi To-Do List Berbasis Web (PHP Native + MySQL)

**📌 Deskripsi Singkat**

Aplikasi To-Do List ini dibuat untuk membantu pengguna dalam mengelola daftar tugas harian.
Aplikasi mendukung sistem login, role user & admin, serta fitur CRUD To-Do, pagination, dan pencarian data.

Project ini dikembangkan menggunakan PHP Native, MySQL, dan Bootstrap dengan konsep MVC sederhana.

**🛠️ Teknologi yang Digunakan**

1. PHP Native

2. MySQL

3. Bootstrap 5

4. HTML & CSS

5. Apache (XAMPP)

6. Session PHP

**👥 Role Pengguna**

🔹 Admin

1. Login sebagai admin

2. Melihat semua to-do dari seluruh user

3. Mengelola status dan menghapus to-do

4. Dashboard admin

🔹 User

1. Login sebagai user

2. Mengelola to-do milik sendiri

3. Tidak bisa melihat to-do user lain

4. Dashboard user

**⚙️ Fitur Aplikasi**

| No | Fitur             |
| -- | ----------------- |
| 1  | Login & Logout    |
| 2  | Role User & Admin |
| 3  | Tambah To-Do      |
| 4  | Ubah Status To-Do |
| 5  | Hapus To-Do       |
| 6  | Pencarian To-Do   |
| 7  | Pagination        |
| 8  | Session Security  |
| 9  | UI Responsif      |

**📂 Struktur Folder**

todo-uas/

├── app/

│   ├── views/

│   │   ├── home.php

│   │   ├── login.php

│   │   ├── dashboard.php

│   │   ├── todo.php

│   │   └── logout.php
│
├── config/

│   └── database.php
│
├── public/

│   └── css/

│       └── style.css
│
├── index.php

└── .htaccess

**📸 URUTAN SCREENSHOT (INI PENTING 🔥)**

RULE UMUM:

1. Screenshot HALAMAN, bukan kode

2. Ukuran normal (fullscreen browser)

3. Disimpan di folder:
   
📁 screenshots/

---

**👑 A. PENJELASAN HALAMAN ADMIN**

1. Halaman Login Admin

![foto](https://github.com/ramzi121006/UAS_WEB/blob/57544dd671db9bb31f064bd0ad61bbb82ac7076a/ss_UAS/admin_1_login%20-%20Copy.png)

Pada halaman ini, admin melakukan proses login dengan memasukkan username dan password.

Sistem akan memverifikasi data admin melalui database. Jika data valid, admin akan diarahkan ke dashboard admin.

2. Dashboard Admin

![foto](https://github.com/ramzi121006/UAS_WEB/blob/cf006a6e46abd47ab15795966b3baa6813e0cb0c/ss_UAS/admin_2_dashboard.png)

Dashboard admin menampilkan informasi akun yang sedang login, termasuk nama pengguna dan role sebagai admin.

Pada halaman ini tersedia tombol Kelola Semua To-Do yang hanya dapat diakses oleh admin.

3. Halaman Semua To-Do User

![foto](https://github.com/ramzi121006/UAS_WEB/blob/9656734a152fbae2eb121ef6533726297615bcba/ss_UAS/admin_3_all_todo.png)

Pada halaman ini, admin dapat melihat seluruh data to-do dari semua user.

Tabel menampilkan kolom tambahan berupa nama user, yang tidak terlihat pada akun user biasa.

Hal ini menunjukkan bahwa admin memiliki hak akses penuh terhadap data.

4. Admin Mengubah Status To-Do

![foto](https://github.com/ramzi121006/UAS_WEB/blob/a2bd5f2df0f0b0637a65ec7a800f771424e58427/ss_UAS/admin_4_update_status.png)

Admin dapat mengubah status to-do dari Belum menjadi Selesai atau sebaliknya dengan menekan tombol status.

Perubahan ini langsung tersimpan ke dalam database.

5. Admin Menghapus To-Do

![foto](https://github.com/ramzi121006/UAS_WEB/blob/41fd2de70aeea51ec866a48e8fda5011793b81ea/ss_UAS/admin_5_delete_todo.png)

Admin memiliki hak untuk menghapus to-do milik user mana pun.

Saat tombol hapus ditekan, sistem akan menampilkan konfirmasi sebelum data dihapus secara permanen.

6. Pencarian To-Do oleh Admin

![foto](https://github.com/ramzi121006/UAS_WEB/blob/be4e0cb8751f98b9705afafb885d3a24f9e24caa/ss_UAS/admin_6_search.png)

Admin dapat melakukan pencarian to-do berdasarkan judul.

Fitur pencarian ini memudahkan admin dalam menemukan data tertentu dari seluruh user.

7. Pagination To-Do Admin

![foto](https://github.com/ramzi121006/UAS_WEB/blob/65a55d2dff012926444d94aa86d125bb7a1e0769/ss_UAS/admin_7_pagination.png)

Jika jumlah data to-do melebihi batas tampilan per halaman, sistem akan menampilkan pagination.

Admin dapat berpindah halaman untuk melihat data lainnya.

8. Logout Admin

![foto](https://github.com/ramzi121006/UAS_WEB/blob/f37d1d2d48b070cd9781bcdcf9e10890eb21b8e2/ss_UAS/admin_8_logout.png)

Admin dapat keluar dari sistem dengan menekan tombol logout.

Sistem akan menghapus session dan mengarahkan kembali ke halaman login.

---

**👤 B. PENJELASAN HALAMAN USER**

1. Halaman Login User

![foto](https://github.com/ramzi121006/UAS_WEB/blob/d4b848e1b688ae054acfe3c4cfb582566014f7dc/ss_UAS/user_9_login.png)

User melakukan login dengan memasukkan username dan password.

Sistem memverifikasi data user dan mengarahkan user ke dashboard jika login berhasil.

2. Dashboard User

![foto](https://github.com/ramzi121006/UAS_WEB/blob/eff4e8c478f97442667a731b5f72bc08406965e8/ss_UAS/user_10_dashboard.png)

Dashboard user menampilkan informasi akun user yang sedang login beserta role sebagai user.

Pada halaman ini terdapat tombol To-Do Saya untuk mengelola tugas pribadi.

3. Halaman To-Do User

![foto]()

User hanya dapat melihat to-do miliknya sendiri.

User tidak dapat melihat atau mengakses to-do milik user lain, sehingga data tetap aman.

4. User Menambah To-Do

![foto]()

User dapat menambahkan to-do baru melalui form input.

Data yang ditambahkan akan tersimpan ke database dan langsung ditampilkan pada tabel.

5. User Mengubah Status To-Do

![foto]()

User dapat mengubah status to-do dari Belum menjadi Selesai atau sebaliknya.

Fitur ini digunakan untuk menandai progres tugas.

6. User Menghapus To-Do

![foto]()

User dapat menghapus to-do miliknya sendiri.

Sistem akan menampilkan konfirmasi sebelum data dihapus.

7. Pencarian To-Do User

![foto]()

User dapat mencari to-do berdasarkan judul.

Fitur ini mempermudah user dalam mengelola daftar tugas yang banyak.

8. Pagination To-Do User

![foto]()

Jika jumlah to-do user lebih dari batas tampilan per halaman, pagination akan muncul.

User dapat berpindah halaman untuk melihat data lainnya.

9. Logout User

![foto]()

User dapat keluar dari sistem dengan menekan tombol logout.

Session akan dihapus dan user diarahkan kembali ke halaman login.

✅ KESIMPULAN

Aplikasi To-Do List ini memiliki dua role pengguna, yaitu admin dan user, dengan hak akses yang berbeda.

Admin memiliki hak untuk mengelola seluruh data to-do, sedangkan user hanya dapat mengelola data miliknya sendiri.

Dengan adanya fitur login, CRUD, pencarian, pagination, dan role management, aplikasi ini telah memenuhi kebutuhan sistem manajemen tugas berbasis web.


