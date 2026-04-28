
CREATE DATABASE inventaris_barang;
USE inventaris_barang;

CREATE TABLE suppliers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_supplier VARCHAR(100),
    alamat TEXT,
    telepon VARCHAR(20)
);

CREATE TABLE barangs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_barang VARCHAR(50),
    nama_barang VARCHAR(100),
    stok INT,
    harga INT
);

CREATE TABLE transaksi_masuks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    barang_id INT,
    jumlah INT,
    tanggal DATE
);

CREATE TABLE transaksi_keluars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    barang_id INT,
    jumlah INT,
    tanggal DATE
);
