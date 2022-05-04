CREATE TABLE tb_karyawan(
Id_karyawan INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
Nama_karyawan VARCHAR(30),
Alamat VARCHAR(50), 
Jenis_kelamin VARCHAR(10),
No_telpon VARCHAR(20)
);

INSERT INTO tb_karyawan
VALUES
(null,'Bima','Nusa Dua','Laki-Laki','082161864048'),
(null,'Bayu','Denpasar','Laki-Laki','082161864048');

CREATE TABLE tb_sewa(
Id_sewa int NOT NULL PRIMARY KEY AUTO_INCREMENT, 
Tgl_pinjam DATE,
Tgl_kembali DATE, 
Tgl_dikembalikan DATE,
jumlah_denda VARCHAR(20)
);

INSERT INTO tb_sewa
VALUES
(null,'04-05-2022','05-05-2022','05-05-2022',''),
(null,'05-05-2022','06-05-2022','07-05-2022','50000');


CREATE TABLE tb_motor(
Id_motor int NOT NULL PRIMARY KEY AUTO_INCREMENT, 
No_plat VARCHAR(10),
Jenis_motor VARCHAR(10), 
Tahun_buat VARCHAR(10),
warna VARCHAR(10), Merk VARCHAR(10)
);

INSERT INTO tb_motor
VALUES
(null,'DK 2526 FAV','Automatic','2020','Hitam','Honda'),
(null,'DK 2527 FAV','Manual','2021','Hitam','Honda');


CREATE TABLE tb_customer(
Id_customer int NOT NULL PRIMARY KEY AUTO_INCREMENT, 
Nama_customer VARCHAR(30),Alamat VARCHAR(50),
Jenis_kelamin VARCHAR(10), No_telpon VARCHAR(20)
);

INSERT INTO tb_customer
VALUES
(null,'Agus','Nusa Dua','Laki-Laki','082161864048'),
(null,'Bagus','Jimbaran','Laki-Laki','082161864048');

