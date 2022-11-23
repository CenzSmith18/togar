CREATE DATABASE IF NOT EXISTS `togar` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `togar`;


CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'asset/menu/kopi.jpg',
  `keterangan` varchar(255) DEFAULT NULL,
  `harga` int(25) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `orderan` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `produk` varchar(255) DEFAULT NULL,
  `jumlah` varchar(50) NOT NULL DEFAULT '0',
  `harga` varchar(255) DEFAULT NULL,
  `totalharga` int(255) NOT NULL DEFAULT 0,
  `alamat` varchar(255) DEFAULT NULL,
  `pembayaran` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'menunggu',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;
