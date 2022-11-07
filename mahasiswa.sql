create database fakultas;

CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(5) NOT NULL,
    nama VARCHAR(50) NOT NULL 
);

CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(10) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum('laki-laki','perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);
insert into mahasiswa (id_jurusan,nim,nama,jenis_kelamin,tempat_lahir,tanggal_lahir,alamat) values (2, '20001112', 'isdak','perempuan', 'gresik', '2002-10-11', 'Malang' );

SELECT * FROM mahasiswa;

UPDATE mahasiswa set nama = 'ivan' where id=1;

DELETE FROM MAHASISWA WHERE id=1;