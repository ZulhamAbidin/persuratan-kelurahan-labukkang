-- MySQL dump 10.13  Distrib 5.7.34, for Linux (x86_64)
--
-- Host: localhost    Database: sql_surat_minur_
-- ------------------------------------------------------
-- Server version	5.7.34-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_b` varchar(255) NOT NULL,
  `gambar_b` varchar(255) NOT NULL,
  `deskripsi_b` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` VALUES (4,'Berita satu','wp8650038-power-chainsaw-man-wallpapers.jpg','ini berita 1'),(6,'SEMARAK 17 ASGUSTUS 20234','1685765519_LED.jpg','Pada hari ini jatuh pada tanggal 17 Agustus 2023, kita Kembali memperingati hari kemerdekaan kita bersama kepala desa marayoka bersama masyarakat desa.');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile` text NOT NULL,
  `s_kelurahan` varchar(225) NOT NULL,
  `s_lpm` varchar(225) NOT NULL,
  `s_linmas` varchar(225) NOT NULL,
  `s_pemuda` varchar(225) NOT NULL,
  `k_rtrw` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'Menurut cerita para sesepuh dan Tokoh Masyarakat Desa Sukosari Lor pada zaman dahulu Desa Sukosari Lor dibabat oleh 7 (Tujuh) orang bersaudara yang datanggya dari Pulau Madura antara lain JU’ BIDES, JU’ BIDE, JU’ IRENG/JU’ SONGOT, JU’ REDHUH, JU’ SARON, JU’ GHENDING, dan JU’ TOSAREH. Ketujuh orang tersebut mempunyai kegemaran yang sama yakni memelihara bunga, setiap ada kesempatan dan diwaktu luangnya selalu mencari bunga, kata Sukosari terdiri dari dua suku kata yaitu SUKO dan SARI yang artinya Suko berarti Cari dan Sari berarti Bunga (Suka Mencari Bunga) sehingnga tempat yang dibabat dinamakan Sukosari dan konon setiap orang yang datang  ke Sukosari selalu ingin menetap.\r\n\r\nHingga saat ini Sukosari Lor telah memiliki catatan sejarah kepemimpinan dari enam figur yang berbeda dan dengan pengabdian yang luar biasa, Bapak Abdus Salam sebagai Kepala Desa Pertama,      Reksosiswono sebagai Kepala Desa Kedua, H. Salehuddin sebagai Kepala Desa Ketiga, Rahbini sebagai Kepala desa Keempat dan diteruskan oleh Sudarsono sebagai Kepala Desa Kelima, kemudian dilanjutkan Oleh Mahfud sebagai Kepala Desa keenam hingga saat ini yang latar belakang pendidikannya adalah Sekolah Menegah Umum, telah berhasil memimpin Desa Sukosari Lor dengan baik, walaupun taraf ekonomi masyarakatnya masih lemah, oleh sebab kurang terpenuhinya sarana irigasi, serta sarana jalan sebagai sarana transportasi utama penduduk setempat untuk meningkatkan kesejahteraan masyarakat yang mengandalkan tradisi gotong royong.','Latar_Belakang_1FE0C63D-6792-42DC-BB12-DBD50327B24B_Dihapus_2.png','struktur-lpm-desa.jpg','struktur_linmas-1024x1012.png','Struktur-Organisasi-Karang-Taruna.jpg','0767858e0a28d6bf7aeaa45a79265e8e.png');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pegawai`
--

LOCK TABLES `pegawai` WRITE;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penduduk`
--

DROP TABLE IF EXISTS `penduduk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penduduk` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tmpt_lhr` varchar(50) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT 'password',
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penduduk`
--

LOCK TABLES `penduduk` WRITE;
/*!40000 ALTER TABLE `penduduk` DISABLE KEYS */;
INSERT INTO `penduduk` VALUES ('131313','koko','08','koko','2023-10-19','','alamat',0,0,'agama','password'),('7304012007030001','Rheza','085249541892','Batu Menteng','2003-07-21','Pelajar','Jeneponto',0,0,'Islam','12345');
/*!40000 ALTER TABLE `penduduk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengaduan`
--

DROP TABLE IF EXISTS `pengaduan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `Jenis_pengaduan` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengaduan`
--

LOCK TABLES `pengaduan` WRITE;
/*!40000 ALTER TABLE `pengaduan` DISABLE KEYS */;
INSERT INTO `pengaduan` VALUES (1,'1','jack','08','1','64fbc7c5ae1a9kbt.png'),(2,'131313','jack','08','2','651d0c6d5fc5cud.jpeg'),(3,'7313063103010001','Muh Syafrum','082256179465','1','6524d0645ece7mal.jpg');
/*!40000 ALTER TABLE `pengaduan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengajuan_surat`
--

DROP TABLE IF EXISTS `pengajuan_surat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengajuan_surat` (
  `id` varchar(100) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `jenis_surat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(225) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nama_usaha` varchar(255) DEFAULT NULL,
  `alamat_usaha` varchar(255) DEFAULT NULL,
  `ttd` varchar(255) NOT NULL DEFAULT '0',
  `jekel` varchar(255) DEFAULT NULL,
  `status_kawin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengajuan_surat`
--

LOCK TABLES `pengajuan_surat` WRITE;
/*!40000 ALTER TABLE `pengajuan_surat` DISABLE KEYS */;
INSERT INTO `pengajuan_surat` VALUES ('SIMB-3569457023','131313','SIMB','2023-10-19','SIMB65305eae48200(2).pdf','5',NULL,NULL,'0',NULL,NULL),('SIMB-8025467023','7304012007030001','SIMB','2023-10-19','SIMB65301dd60ad89ess.pdf','5',NULL,NULL,'1',NULL,NULL),('SIMB-SBM6451023','7304012007030001','SIMB','2023-10-14','SIMB6529ea79daa07ess.pdf','5',NULL,NULL,'1',NULL,NULL),('SITU-0U39090023','1','SITU','2023-09-14','SITU6502649c03fa1sin.jpg','1','sa','sa','0',NULL,NULL),('SITU-2648944023','7304012007030001','SITU','2023-10-13','SITU65288b7b6c23eess.pdf','5','ayam','Jeneponto','0',NULL,NULL),('SITU-4bb10210023','kk','SITU','2023-09-14','SITU650267b4e6c21612.jpg','5','kk','kk','0',NULL,NULL),('SITU-64d5218023','123','SITU','2023-08-14','SITU64d94673b8878r 2.pdf','5','usage berkah jaya','jalan jalan','0',NULL,NULL),('SITU-6508466023','7304012007030001','SITU','2023-10-19','SITU65301d7c81e97ess.pdf','5','ayam','Jeneponto','1',NULL,NULL),('SITU-8136914023','1','SITU','2023-09-30','SITU651763db88a6fput.pdf','1','koko','alamat koko','0',NULL,NULL),('SITU-84a10419023','333','SITU','2023-08-16','SITU64dbeb85a87a8r 2.pdf','5','usaha','alamat usage','0',NULL,NULL),('SITU-8a66720023','444','SITU','2023-08-16','SITU64dc2ae427783r 2.pdf','5','sas','sa','0',NULL,NULL),('SITU-cc19680023','7304012007030001','SITU','2023-09-09','SITU64fc44afeadc4sal.pdf','5','ayam','jeneponto','0',NULL,NULL),('SITU-Tfb7347023','7304012007030001','SITU','2023-10-13','SITU6528939f4fc53ess.pdf','5','ayam','Jeneponto','0',NULL,NULL),('SITU-U356511023','aa','SITU','2023-09-14','SITU650268bb2f8d9rat.jpg','5','a','a','1',NULL,NULL),('SKD-1a95360023','7304012007030001','SKD','2023-10-19','SKD65301ac9145f6ess.pdf','5',NULL,NULL,'1',NULL,NULL),('SKGG-1S04638023','321','SKGG','2023-10-13','SKGG6528741ca2bff(2).pdf','5',NULL,NULL,'1',NULL,NULL),('SKGG-2fS10858023','7304012007030001','SKGG','2023-10-19','SKGG653065c445278ess.pdf','5',NULL,NULL,'1',NULL,NULL),('SKGG-66110165023','7304012007030001','SKGG','2023-10-19','SKGG65301d151836cess.pdf','5',NULL,NULL,'1',NULL,NULL),('SKGG-6b88418023','0876543214567','SKGG','2023-10-09','SKGG652379828d99cess.pdf','5',NULL,NULL,'0',NULL,NULL),('SKKL-5408657023','7304012007030001','SKKL','2023-10-19','SKKL6530194615618ess.pdf','5',NULL,NULL,'1',NULL,NULL),('SKKL-c826031023','1929342018','SKKL','2023-10-10','SKKL6524ce31d5a94023.pdf','5',NULL,NULL,'0',NULL,NULL),('SKKM-65K8058023','7304012007030001','SKKM','2023-10-19','SKKM653019b8c5823ess.pdf','5',NULL,NULL,'1',NULL,NULL),('SKKM-6c85249023','7304012007030001','SKKM','2023-10-14','SKKM6529e9b9da5c2ess.pdf','5',NULL,NULL,'1',NULL,NULL),('SKKM-K728045023','7304012007030001','SKKM','2023-10-13','SKKM6528927ae686bess.pdf','5',NULL,NULL,'0',NULL,NULL),('SKM-3276136023','1231','SKM','2023-10-12','SKM6527c28476650(2).pdf','5',NULL,NULL,'0',NULL,NULL),('SKM-55b8462023','7304012007030001','SKM','2023-10-19','SKM65301bd81500eess.pdf','5',NULL,NULL,'1',NULL,NULL),('SKM-6cM8310021','1547','SKM','2021-01-23','SKM600c2ada17dcdoof.pdf','5',NULL,NULL,'0',NULL,NULL),('SKP-8P57159023','7304012007030001','SKP','2023-10-19','SKP65301a27aa88eess.pdf','5',NULL,NULL,'1',NULL,NULL),('SKP-b675052023','7304012007030001','SKP','2023-10-14','SKP6529eb1fa2ae7ess.pdf','5',NULL,NULL,'1',NULL,NULL),('SKPH-52b5139023','7304012007030001','SKPH','2023-10-13','SKPH652884c52c05aess.pdf','5',NULL,NULL,'0',NULL,NULL),('SKPH-8177134023','1929342018','SKPH','2023-10-10','SKPH6524fe0c27984ess.pdf','5',NULL,NULL,'0',NULL,NULL),('SKPH-d519117023','1426373748','SKPH','2023-10-08','SKPH6522ad6628387Acc.pdf','5',NULL,NULL,'0',NULL,NULL),('SKPH-P149161023','7304012007030001','SKPH','2023-10-19','SKPH65301b2b6d738ess.pdf','5',NULL,NULL,'1',NULL,NULL),('SKT-1T17740023','7304012007030001','SKT','2023-10-13','SKT65288593832b4ess.pdf','5',NULL,NULL,'0',NULL,NULL),('SKT-3508937023','123','SKT','2023-10-13','SKT652871ef0314d(2).pdf','5',NULL,NULL,'0',NULL,NULL),('SKT-4c75564023','7304012007030001','SKT','2023-10-19','SKT65301cabb36c5ess.pdf','5',NULL,NULL,'1',NULL,NULL),('SKT-7446946023','7304012007030001','SKT','2023-10-13','SKT652892e7804e9ess.pdf','5',NULL,NULL,'0',NULL,NULL),('SKT-7fd10441023','7304012007030001','SKT','2023-10-13','SKT652886266fe7fess.pdf','5',NULL,NULL,'0',NULL,NULL),('SKU-2Sa9550023','7304012007030001','SKU','2023-10-14','SKU6529ea20cf314ess.pdf','5',NULL,NULL,'0',NULL,NULL),('SKU-8696863023','7304012007030001','SKU','2023-10-19','SKU65301c409b61bess.pdf','5',NULL,NULL,'1',NULL,NULL),('SKU-9947220023','1929342018','SKU','2023-10-09','SKU6523e67215499ess.pdf','5',NULL,NULL,'0',NULL,NULL),('SKU-Kfa6121023','12345678','SKU','2023-08-24','SKU64e6ca4adf6dfO) .pdf','5','affgfhf','dgdgdge','0',NULL,NULL),('SKU-U869870023','12345678','SKU','2023-08-25','SKU64e87396314a8ANA.pdf','5','affgfhf','dgdgdge','0',NULL,NULL),('SPKK-1P55455023','7304012007030001','SPKK','2023-10-19','SPKK653017825014cess.pdf','5',NULL,NULL,'1',NULL,NULL),('SPKK-2S17942023','7304012007030001','SPKK','2023-10-13','SPKK65288a4544e73ess.pdf','5',NULL,NULL,'0',NULL,NULL),('SPKK-46K4515023','123','SPKK','2023-08-13','SPKK64d8e0f134ef2dev.jpg','5',NULL,NULL,'0',NULL,NULL),('SPKK-6P16425023','8989','SPKK','2023-10-10','SPKK65245ee110d2fput.pdf','1',NULL,NULL,'0',NULL,NULL),('SPKK-dS34933023','7313063103010001','SPKK','2023-10-10','SPKK6524cfcacaea4023.pdf','5',NULL,NULL,'0',NULL,NULL),('SPKK-eK95548023','7304012007030001','SPKK','2023-10-14','SPKK6529e944980e0ess.pdf','5',NULL,NULL,'1',NULL,NULL),('SPNA-56210156023','7304012007030001','SPNA','2023-10-19','SPNA653018dd725f0ess.pdf','5',NULL,NULL,'1','Laki-Laki','Sudah Menikah'),('SPNA-5ee6543023','7304012007030001','SPNA','2023-10-13','SPNA65288aeb3e8caess.pdf','5',NULL,NULL,'0','','Sudah Menikah'),('SPNA-6d77454023','7304012007030001','SPNA','2023-10-16','SPNA652d1e59f28eeess.pdf','5',NULL,NULL,'1','Laki-Laki','Sudah Menikah'),('SPNA-8c64919023','1929342018','SPNA','2023-10-09','SPNA6523e5a7c55b5ess.pdf','5',NULL,NULL,'0',NULL,NULL),('SPNA-91P9816023','1929342018','SPNA','2023-10-06','SPNA651fae5321838ess.pdf','5',NULL,NULL,'0',NULL,NULL),('SPNA-9867915023','1','SPNA','2023-09-30','SPNA6517689507874put.pdf','1',NULL,NULL,'0',NULL,NULL),('SPNA-A0b9922023','909090','SPNA','2023-10-09','SPNA65240ded92d25(2).pdf','5',NULL,NULL,'0','laki-laki','status'),('SPNA-A967112023','sasa','SPNA','2023-09-14','SPNA650269394e3cd612.jpg','5',NULL,NULL,'0',NULL,NULL),('SPNA-AP17853023','7304012007030001','SPNA','2023-10-14','SPNA6529ebb3b889aess.pdf','5',NULL,NULL,'1','Laki-Laki','Sudah Menikah');
/*!40000 ALTER TABLE `pengajuan_surat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_keluar`
--

DROP TABLE IF EXISTS `surat_keluar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `nama_surat_keluar` varchar(100) NOT NULL,
  `tanggal_surat_keluar` date NOT NULL,
  `keterangan_surat_keluar` varchar(100) NOT NULL,
  `file_surat_keluar` varchar(200) NOT NULL,
  PRIMARY KEY (`id_surat_keluar`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_keluar`
--

LOCK TABLES `surat_keluar` WRITE;
/*!40000 ALTER TABLE `surat_keluar` DISABLE KEYS */;
INSERT INTO `surat_keluar` VALUES (1,'[koko-131313]-Surat Izin Mendirikan Bangunan','2023-10-19','ID: SIMB-3569457023',''),(2,'[Rheza-7304012007030001]-Surat Ganti Rugi','2023-10-19','ID: SKGG-2fS10858023','');
/*!40000 ALTER TABLE `surat_keluar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_keterangan`
--

DROP TABLE IF EXISTS `surat_keterangan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_keterangan` (
  `id_surat_keterangan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_surat_keterangan` varchar(100) NOT NULL,
  `tanggal_surat_keterangan` date NOT NULL,
  `keterangan_surat_keterangan` varchar(100) NOT NULL,
  `file_surat_keterangan` varchar(200) NOT NULL,
  PRIMARY KEY (`id_surat_keterangan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_keterangan`
--

LOCK TABLES `surat_keterangan` WRITE;
/*!40000 ALTER TABLE `surat_keterangan` DISABLE KEYS */;
/*!40000 ALTER TABLE `surat_keterangan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_masuk`
--

DROP TABLE IF EXISTS `surat_masuk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_surat_masuk` varchar(100) NOT NULL,
  `tanggal_surat_masuk` date NOT NULL,
  `keterangan_surat_masuk` varchar(100) NOT NULL,
  `file_surat_masuk` varchar(200) NOT NULL,
  PRIMARY KEY (`id_surat_masuk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_masuk`
--

LOCK TABLES `surat_masuk` WRITE;
/*!40000 ALTER TABLE `surat_masuk` DISABLE KEYS */;
/*!40000 ALTER TABLE `surat_masuk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin','administrator'),(5,'pegawai','pegawai','pegawai'),(7,'surahmad','surahmad','administrator'),(8,'handoko123','handoko123','pegawai');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'sql_surat_minur_'
--

--
-- Dumping routines for database 'sql_surat_minur_'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-19  0:30:56
