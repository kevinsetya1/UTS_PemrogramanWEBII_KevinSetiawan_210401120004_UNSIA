CREATE DATABASE siakad;
USE siakad;

CREATE TABLE Matakuliah (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nama VARCHAR(255),
    `Kode Matakuliah` CHAR(5),
    Deskripsi TEXT
);

CREATE TABLE Dosen (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nama VARCHAR(255),
    NIDN CHAR(8),
    `Jenjang Pendidikan` ENUM("S2","S3")
);

CREATE TABLE Mahasiswa (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nama VARCHAR(255),
    NIM CHAR(10),
    `Program Studi` VARCHAR(255)
);
