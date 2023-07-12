# TES-INTERNSHIP-PROJECT-YAYASAN-HASNUR-CENTRE
 TES INTERNSHIP PROJECT YAYASAN HASNUR CENTRE DIVISI WEB DEVELOPER DIGITALIZ membuat aplikasi Online Course Management

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
- Pilih menu `Run` pada menu pilih `Start Debugging` lalu pilih `Launch built-in Server and Debug`
- Jika muncul pembertihauan klik Izinkan atau Yes saja.
