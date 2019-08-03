# Website Desa Kedungdowo

Website Resmi Kedungdowo.

## Instalasi

### 0. Setup
Jalankan perintah `composer create-project laravolt/laravolt` untuk membuat proyek baru, ubah isi file `.env` sesuai dengan konfigurasi masing-masing.

### Jalankan Migration


### 1. Symlink assets (css, js, icons, dll)

- Jalankan perintah `php artisan laravolt:link-assets`

Langkah ini perlu dilakukan agar aset-aset yang dibutuhkan untuk menampilkan halaman admin bisa diakses oleh publik. Dibalik layar, perintah ini akan melakukan `copy/symlinks` dari laravolt/ui ke folder `public`

### 2. Ubah redirect route ketika mengakses halaman yang butuh autentikasi

- Tambahkan potongan kode berikut ke file `app/Exceptions/Handler.php`:

```php
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return $request->expectsJson()
                    ? response()->json(['message' => $exception->getMessage()], 401)
                    : redirect()->guest(route('auth::login'));
    }
```
