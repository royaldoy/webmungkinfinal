/*
 Navicat Premium Data Transfer

 Source Server         : roy
 Source Server Type    : MySQL
 Source Server Version : 100113
 Source Host           : localhost:3306
 Source Schema         : batiku

 Target Server Type    : MySQL
 Target Server Version : 100113
 File Encoding         : 65001

 Date: 12/07/2020 14:42:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tabel_admin
-- ----------------------------
DROP TABLE IF EXISTS `tabel_admin`;
CREATE TABLE `tabel_admin`  (
  `idAdmin` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `namaAdmin` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`idAdmin`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tabel_admin
-- ----------------------------
INSERT INTO `tabel_admin` VALUES ('1', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `tabel_admin` VALUES ('2', 'admin2', 'admin2@admin.com', 'admin');
INSERT INTO `tabel_admin` VALUES ('3', 'Roy Aldo Yulian', 'admin3@admin.com', '4297f44b13955235245b2497399d7a93');

-- ----------------------------
-- Table structure for tabel_alamat
-- ----------------------------
DROP TABLE IF EXISTS `tabel_alamat`;
CREATE TABLE `tabel_alamat`  (
  `idUser` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_telp` varchar(14) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kecamatan` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kota` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_pos` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tambahan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idUser`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tabel_alamat
-- ----------------------------
INSERT INTO `tabel_alamat` VALUES ('5', 'Saber Astrada', '083144125568', 'saberantisan@gmail.com', 'Malaria rt 02 rw 03', 'Banjarsari', 'Solo', '57143', NULL);
INSERT INTO `tabel_alamat` VALUES ('6', 'Roy aldo', '0831231123', 'royroyroy@gmail.com', 'Jl. Malvin no 52', 'Bayangkara', 'Surakarta', '57142', 'Cepet dikirim ya');

-- ----------------------------
-- Table structure for tabel_kategori
-- ----------------------------
DROP TABLE IF EXISTS `tabel_kategori`;
CREATE TABLE `tabel_kategori`  (
  `idKategori` int(11) NOT NULL,
  `namaKategori` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`idKategori`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tabel_kategori
-- ----------------------------
INSERT INTO `tabel_kategori` VALUES (1, 'Pria');
INSERT INTO `tabel_kategori` VALUES (2, 'Wanita');
INSERT INTO `tabel_kategori` VALUES (3, 'Anak-anak');
INSERT INTO `tabel_kategori` VALUES (4, 'Couple');
INSERT INTO `tabel_kategori` VALUES (5, 'Sarimbit');

-- ----------------------------
-- Table structure for tabel_keranjang
-- ----------------------------
DROP TABLE IF EXISTS `tabel_keranjang`;
CREATE TABLE `tabel_keranjang`  (
  `idKeranjang` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `idUser` int(11) NOT NULL,
  `idProduk` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `namaProduk` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`idKeranjang`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tabel_komentar
-- ----------------------------
DROP TABLE IF EXISTS `tabel_komentar`;
CREATE TABLE `tabel_komentar`  (
  `idKomen` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pesan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`idKomen`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tabel_produk
-- ----------------------------
DROP TABLE IF EXISTS `tabel_produk`;
CREATE TABLE `tabel_produk`  (
  `idProduk` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ukuran` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kategori` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `path` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`idProduk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tabel_produk
-- ----------------------------
INSERT INTO `tabel_produk` VALUES (21, 'Batik Pria Panjang', '924183c75013ea920be6c475cbd1f1af', 'L', 'Lengan panjang slimfit\r\nBahan cotton\r\nbatik cetak berkualitas', 'pria', 125000, 18, 'image/924183c75013ea920be6c475cbd1f1af.png', 101728);
INSERT INTO `tabel_produk` VALUES (22, 'Kemeja Batik Lengan Panjang Pria', '4e7d919d4262dc94bc06ac9b682c7229', 'XL', 'Bahan kualitas premium', 'pria', 150000, 8, 'image/4e7d919d4262dc94bc06ac9b682c7229.png', 48168);
INSERT INTO `tabel_produk` VALUES (23, 'Kemeja Batik Pendek', 'dda3ef641dfb9c3f9876da018575c282', 'M', 'Kemeja Batik Pendek M', 'pria', 90000, 12, 'image/dda3ef641dfb9c3f9876da018575c282.png', 77418);
INSERT INTO `tabel_produk` VALUES (24, 'Batik Lengan Pendek Premium', 'ab921a552315ec2583aac748af43564e', 'L', 'Kualitas Premium', 'pria', 200000, 3, 'image/ab921a552315ec2583aac748af43564e.png', 46758);
INSERT INTO `tabel_produk` VALUES (25, 'Gaun Batik', '767b0ef6ba07802af0ecd619ceb790ee', 'M', 'Gaun Batik Slim', 'wanita', 320000, 11, 'image/767b0ef6ba07802af0ecd619ceb790ee.png', 138829);
INSERT INTO `tabel_produk` VALUES (26, 'Gaun  Batik Sebahu', '4e69e603af1d1d5a0bb02388c3594f51', 'S', 'Gaun  Batik Sebahu', 'wanita', 321000, 9, 'image/4e69e603af1d1d5a0bb02388c3594f51.png', 401299);
INSERT INTO `tabel_produk` VALUES (27, 'Batik Formal Office', '2737a4e347b11f27c4250c84e136b78a', 'M', 'Batik Formal Office', 'wanita', 230000, 10, 'image/2737a4e347b11f27c4250c84e136b78a.png', 116487);
INSERT INTO `tabel_produk` VALUES (28, 'Batik Summer', '3c536a078cf2d79146a9504904dc928c', 'M', 'Batik Summer', 'wanita', 205000, 12, 'image/3c536a078cf2d79146a9504904dc928c.png', 82566);
INSERT INTO `tabel_produk` VALUES (29, 'Batik Couple bown', '8a86349b89b85b34c8702bedcd8b6a9b', 'L', 'Batik Couple bown', 'couple', 729000, 12, 'image/8a86349b89b85b34c8702bedcd8b6a9b.png', 96000);
INSERT INTO `tabel_produk` VALUES (30, 'Batik Anak', '7063134b3d7463dd8f050beb009c8e6b', 'M', 'Batik Couple Seasi', 'anak', 78000, 8, 'image/7063134b3d7463dd8f050beb009c8e6b.png', 134794);
INSERT INTO `tabel_produk` VALUES (31, 'Batik Anak Pria', 'e341f4d8f115c1553eaf91499e96838c', 'L', 'Batik Anak Pria', 'anak', 90000, 10, 'image/e341f4d8f115c1553eaf91499e96838c.png', 312814);
INSERT INTO `tabel_produk` VALUES (32, 'Sarimbit', '0d3e2c4a1cec2ed207000ae267710271', 'M', 'Sarimbit', 'sarimbit', 680000, 12, 'image/0d3e2c4a1cec2ed207000ae267710271.png', 86826);
INSERT INTO `tabel_produk` VALUES (35, 'Batik Anak Perempuan', '68fab663f50478001d32ec9ac8a966e3', 'S', 'Bagus untuk anak kecil', 'anak', 60000, 2, 'image/68fab663f50478001d32ec9ac8a966e3.png', 109837);
INSERT INTO `tabel_produk` VALUES (36, 'Batik Anak Perempuan #2', '61d6148d6eb0b510a933d962ae9057d5', 'S', 'Bagus untuk dibawa ke acara', 'anak', 90000, 2, 'image/61d6148d6eb0b510a933d962ae9057d5.png', 72964);

-- ----------------------------
-- Table structure for tabel_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `tabel_transaksi`;
CREATE TABLE `tabel_transaksi`  (
  `idTransaksi` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `daftarBarang` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`idTransaksi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tabel_transaksi
-- ----------------------------
INSERT INTO `tabel_transaksi` VALUES (6, '4', 'Batik Pria, Kategori : pria, Jumlah : 1<br>, Kategori : sarimbit, Jumlah : 1<br>', '2019-12-05', 223000);
INSERT INTO `tabel_transaksi` VALUES (7, '6', 'Batik Lengan Pendek Premium, Kategori : pria, Jumlah : 1<br>', '2020-06-22', 200000);
INSERT INTO `tabel_transaksi` VALUES (8, '6', 'Gaun Batik, Kategori : wanita, Jumlah : 1<br>', '2020-06-22', 320000);
INSERT INTO `tabel_transaksi` VALUES (9, '5', 'Batik Lengan Pendek Premium, Kategori : pria, Jumlah : 1<br>', '2020-06-28', 200000);
INSERT INTO `tabel_transaksi` VALUES (10, '5', 'Batik Pria Panjang, Kategori : pria, Jumlah : 1<br>', '2020-06-28', 125000);
INSERT INTO `tabel_transaksi` VALUES (11, '5', 'Batik Pria Panjang, Kategori : pria, Jumlah : 1<br>Batik Lengan Pendek Premium, Kategori : pria, Jumlah : 1<br>', '2020-07-11', 325000);
INSERT INTO `tabel_transaksi` VALUES (12, '6', 'Batik Pria Panjang, Kategori : pria, Jumlah : 1<br>Batik Anak Pria, Kategori : anak, Jumlah : 3<br>Batik Anak Perempuan #2, Kategori : anak, Jumlah : 1<br>', '2020-07-12', 485000);

-- ----------------------------
-- Table structure for tabel_trolly
-- ----------------------------
DROP TABLE IF EXISTS `tabel_trolly`;
CREATE TABLE `tabel_trolly`  (
  `idTrolly` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`idTrolly`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tabel_trolly
-- ----------------------------
INSERT INTO `tabel_trolly` VALUES (1, 4, 28, 1, 205000);

-- ----------------------------
-- Table structure for tabel_user
-- ----------------------------
DROP TABLE IF EXISTS `tabel_user`;
CREATE TABLE `tabel_user`  (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `namaUser` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(70) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telpon` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`idUser`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tabel_user
-- ----------------------------
INSERT INTO `tabel_user` VALUES (4, 'Asep', 'asep@outlook.com', '12122', '087777777777');
INSERT INTO `tabel_user` VALUES (5, 'user', 'user@user.com', 'mekicina', '0897666555');
INSERT INTO `tabel_user` VALUES (6, 'Roy Aldo', 'aldoroy31@gmail.com', '123123', '085223456112');

SET FOREIGN_KEY_CHECKS = 1;
