CREATE DATABASE IF NOT EXISTS smk_merah_putih
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE smk_merah_putih;

CREATE TABLE data_guru (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nip VARCHAR(32) NOT NULL,
  nama  VARCHAR(100) NOT NULL,
  jenis_kelamin enum('laki-laki','perempuan') NOT NULL,
  alamat TEXT NOT NULL,
  jabatan VARCHAR(64) NOT NULL,
  statuss VARCHAR(16) NOT NULL
);

CREATE TABLE data_siswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nis VARCHAR(11) NOT NULL,
  nama VARCHAR(64) NOT NULL,
  umur VARCHAR(11) NOT NULL,
  kelas VARCHAR(64) NOT NULL,
  jurusan VARCHAR(16) NOT NULL,
  subkelas VARCHAR(16) NOT NULL,
  alamat TEXT NOT NULL
);

CREATE TABLE data_user (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama_user VARCHAR(100) NOT NULL,
  email VARCHAR(120) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP
);

CREATE TABLE IF NOT EXISTS saran (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100) NOT NULL,
  email VARCHAR(120) NOT NULL,
  pesan TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO data_guru (NIP, nama, jabatan) VALUES
('19781212001','Siti Rahmawati','Kepala Sekolah'),
('19850317002','Budi Santoso','Waka Kurikulum')
ON DUPLICATE KEY UPDATE nama=VALUES(nama), jabatan=VALUES(jabatan);

INSERT INTO data_siswa (NIS, nama, kelas) VALUES
('2024001','Ani Lestari','X RPL 1'),
('2024002','Doni Saputra','XI TKJ 2')
ON DUPLICATE KEY UPDATE nama=VALUES(nama), kelas=VALUES(kelas);

INSERT INTO data_user (email, password, nama_user) VALUES
('admin@smkmerahputih.sch.id', '$2y$10$abcdefghijklmnopqrstuv', 'Admin')
ON DUPLICATE KEY UPDATE nama_user=VALUES(nama_user);
