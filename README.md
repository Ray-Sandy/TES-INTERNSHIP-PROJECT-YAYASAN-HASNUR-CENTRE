# TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE
 TES INTERNSHIP PROJECT YAYASAN HASNUR CENTRE DIVISI WEB DEVELOPER DIGITALIZ 
 membuat aplikasi Online Course Management.
 
 tes internship project ini dibuat tampa menggunakan framework
 hanya sekedar basic php dan mysql menggunakan Xampp.

- masukan file kedalam htdocs di dalam file Xampp
- Jalankan Xampp masuk ke admin Mysql
- Buat database baru dengan nama `teskemampuan`
- jalanakan query pada mysql berikut :

```
CREATE TABLE kursus (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    deskripsi TEXT,
    durasi INT
);

CREATE TABLE materi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    deskripsi TEXT,
    link_embed VARCHAR(255)
);
```

- Bisa Langsung di jalankan di Visual Studio Code
- Pilih menu `Run` pada menu pilih `Start Debugging`
- lalu pilih `Launch built-in Server and Debug`
- ![image](https://github.com/Ray-Sandy/TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE/assets/132418753/27b59ece-6b42-4ba0-9fd5-887a50fb74ce)
- Jika muncul pembertihauan klik Izinkan atau Yes saja.

# Berikut Gambaran dari aplikasi yang sudah dibuat :
- halaman index
![image](https://github.com/Ray-Sandy/TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE/assets/132418753/317e2415-a514-425c-8025-c50dc0e349ae)

- Halaman Tambah Kursus Baru
![image](https://github.com/Ray-Sandy/TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE/assets/132418753/9a2972c3-f4b4-4380-9fe2-a6da3ef03555)
![image](https://github.com/Ray-Sandy/TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE/assets/132418753/4c0444d0-1bbf-458c-9d39-6e8c8ad20e04)

- halaman Edit Kursus
![image](https://github.com/Ray-Sandy/TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE/assets/132418753/fdfca03f-4cd1-4932-99a1-1b2a5d2fef7f)
![image](https://github.com/Ray-Sandy/TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE/assets/132418753/5e30f3cd-69ae-4583-a288-d6c088204c6d)

- halaman Hapus Kursus
![image](https://github.com/Ray-Sandy/TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE/assets/132418753/4dd1b7ae-7efe-4026-91e0-5dcf20d0d2ed)
![image](https://github.com/Ray-Sandy/TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE/assets/132418753/2f401684-1d8c-4815-a1ba-2c987d41ecdc)

- Halaman Tambah Materi Baru
![image](https://github.com/Ray-Sandy/TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE/assets/132418753/7a29ee53-3e71-4ea5-aeef-ba1cc84531e2)
![image](https://github.com/Ray-Sandy/TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE/assets/132418753/9e0aa078-d5de-42bd-8e91-0208be32d829)

- halaman Edit Materi
![image](https://github.com/Ray-Sandy/TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE/assets/132418753/b8700203-983c-40e4-9b08-609bf9b3758c)
![image](https://github.com/Ray-Sandy/TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE/assets/132418753/e62e5a2c-9ebd-43c4-87b1-6bf9961e3093)

- Hapus Materi (data langsungt terhapus)
![image](https://github.com/Ray-Sandy/TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE/assets/132418753/193e041b-773e-4e9c-b4ee-4402cb1abacb)

# Database structure :
![image](https://github.com/Ray-Sandy/TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE/assets/132418753/0fe48428-1283-4d00-99ea-d1b545f57f3d)

- Table Kursus
![image](https://github.com/Ray-Sandy/TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE/assets/132418753/378813c2-6090-48be-a2cd-a9ad47f5f14a)

- Table Materi
![image](https://github.com/Ray-Sandy/TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE/assets/132418753/edb18cdf-38df-4c37-a764-be1c3af59922)



