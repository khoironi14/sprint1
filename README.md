Cara Instalasi Web
1. Buatlah sebuah database dengan nama bebas
2. Lakukan konfigurasi di file .env dengan mengubah nama db_databse sesuai yang dibuat dan pastikan  db_username dan db_password sesuai
3. Lakukan php artisan migrate untuk membuild table ke dalam database
4. Lakukan perintah php artisan command:saveData untuk melakuakn tarik data provinsi dan kota dari API untuk disimpan ke dalam table
5. Jalan php artisan serve untuk menjalankan projectnya
6. untuk mendapatkan API data kota akses url http://localhost:port/api/search/provinces?id=id_province
7. untuk mendapatkan API data kota akses url http://localhost:port/api/search/cities?id=id_city
