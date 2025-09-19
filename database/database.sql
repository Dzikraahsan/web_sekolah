-- Buat database (jalankan sekali jika belum ada)
CREATE DATABASE IF NOT EXISTS smk_merah_putih
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE smk_merah_putih;

-- Tabel diminta
CREATE TABLE IF NOT EXISTS guru (
  NIP VARCHAR(30) PRIMARY KEY,
  nama VARCHAR(100) NOT NULL,
  jabatan VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS siswa (
  NIS VARCHAR(30) PRIMARY KEY,
  nama VARCHAR(100) NOT NULL,
  kelas VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS user (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(120) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  nama_user VARCHAR(100) NOT NULL
);

-- Tambahan untuk kotak saran
CREATE TABLE IF NOT EXISTS saran (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100) NOT NULL,
  email VARCHAR(120) NOT NULL,
  pesan TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Contoh data
INSERT INTO guru (NIP, nama, jabatan) VALUES
('19781212001','Siti Rahmawati','Kepala Sekolah'),
('19850317002','Budi Santoso','Waka Kurikulum')
ON DUPLICATE KEY UPDATE nama=VALUES(nama), jabatan=VALUES(jabatan);

INSERT INTO siswa (NIS, nama, kelas) VALUES
('2024001','Ani Lestari','X RPL 1'),
('2024002','Doni Saputra','XI TKJ 2')
ON DUPLICATE KEY UPDATE nama=VALUES(nama), kelas=VALUES(kelas);

INSERT INTO user (email, password, nama_user) VALUES
('admin@smkmerahputih.sch.id', '$2y$10$abcdefghijklmnopqrstuv', 'Admin')
ON DUPLICATE KEY UPDATE nama_user=VALUES(nama_user);
