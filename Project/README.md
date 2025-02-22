<<<<<<< HEAD
# elisama_crm
=======
# Smart CRM - Laravel 11

Smart CRM adalah aplikasi Customer Relationship Management (CRM) sederhana berbasis Laravel 11 yang dirancang untuk membantu divisi sales PT. Smart dalam mengelola pelanggan dan layanan internet mereka.

## 📌 Fitur Utama:
- ✅ **Autentikasi User (Login/Register)**
- ✅ **Manajemen Lead (Calon Customer)**
- ✅ **Manajemen Produk (Layanan Internet)**
- ✅ **Manajemen Customer Berlangganan**
- ✅ **Manajemen Project (Approval & Status Lead)**
- ✅ **Database PostgreSQL**
- ✅ **Siap untuk Deployment di Cloud (Heroku, VPS, dll.)**

## 📂 Instalasi
### 1️⃣ Clone Repository:
```sh
git clone https://github.com/yourusername/smart_crm.git
cd smart_crm
```

### 2️⃣ Install Dependensi:
```sh
composer install
npm install && npm run dev
```

### 3️⃣ Konfigurasi Environment:
Buat file `.env` berdasarkan `.env.example` lalu ubah konfigurasi database:
```sh
cp .env.example .env
php artisan key:generate
```

### 4️⃣ Setup Database:
```sh
php artisan migrate --seed
```

### 5️⃣ Jalankan Server:
```sh
php artisan serve
```

## 🚀 Deployment
Untuk deployment di Heroku atau VPS, pastikan kamu telah mengkonfigurasi `.env` dan menjalankan perintah:
```sh
php artisan config:cache
```

## 📜 Lisensi
Proyek ini dikembangkan untuk keperluan seleksi Fullstack Developer di PT. Smart.
>>>>>>> 8c124fb (Initial commit - Upload Project)
