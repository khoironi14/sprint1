Cara Instalasi Web
1. Lakukan git clone
2. Buatlah sebuah database dengan nama bebas
3. Rename .env.example menjadi .env lalu lakukan konfigurasi  dengan mengubah nama db_databse sesuai yang dibuat dan pastikan  db_username dan db_password sesuai
4. Lakukan php artisan migrate untuk membuild table ke dalam database
5. Lakukan perintah php artisan command:saveData untuk melakuakn tarik data provinsi dan kota dari API untuk disimpan ke dalam table
6. Jalan php artisan serve untuk menjalankan projectnya
7. untuk mendapatkan API data kota akses url http://localhost:port/api/search/provinces?id=id_province
8. untuk mendapatkan API data kota akses url http://localhost:port/api/search/cities?id=id_city
