Berikut adalah instruksi untuk menjalankan aplikasi Laravel 9 & React js - PenKu:

## Menjalankan Secara Lokal

Clone proyek

```bash
  git clone https://github.com/abdulaziz-m5u/ecommerce-youtube.git nama-proyek
```

Masuk ke direktori proyek

```bash
  cd nama-proyek
```

-   Salin file .env.example menjadi .env dan edit kredensial database di sana

```bash
    composer install
```

```bash
    php artisan key:generate
```

```bash
    php artisan migrate:fresh --seed
```

```bash
    php artisan storage:link
```

#### Masuk

-   email = admin@example.com
-   password = 123
