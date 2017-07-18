/*
Navicat MySQL Data Transfer

Source Server         : LocalhostDhani
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : db_sirt

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-08-13 21:14:41
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `chat`
-- ----------------------------
DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `id_chat` int(99) NOT NULL AUTO_INCREMENT,
  `user` bigint(20) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pesan` text NOT NULL,
  `chat_category_id` int(11) NOT NULL,
  PRIMARY KEY (`id_chat`),
  KEY `user` (`user`),
  KEY `chat_kat` (`chat_category_id`),
  CONSTRAINT `chat_kat` FOREIGN KEY (`chat_category_id`) REFERENCES `chat_category` (`chat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user` FOREIGN KEY (`user`) REFERENCES `tbl_ktp` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of chat
-- ----------------------------
INSERT INTO `chat` VALUES ('1', '123456', '2016-08-12 13:32:34', 'fsdfsdf', '16');

-- ----------------------------
-- Table structure for `chat_category`
-- ----------------------------
DROP TABLE IF EXISTS `chat_category`;
CREATE TABLE `chat_category` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_name` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`chat_id`),
  KEY `created_by` (`created_by`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of chat_category
-- ----------------------------
INSERT INTO `chat_category` VALUES ('12', 'sadasd', '2016-08-07', '0');
INSERT INTO `chat_category` VALUES ('13', 'Apakek', '2016-08-07', '1111');
INSERT INTO `chat_category` VALUES ('14', 'sdfsdfsd', '2016-08-08', '1111');
INSERT INTO `chat_category` VALUES ('15', '17 Agustus yuk', '2016-08-08', '1111');
INSERT INTO `chat_category` VALUES ('16', 'Testing', '2016-08-09', '123456');

-- ----------------------------
-- Table structure for `general_chat`
-- ----------------------------
DROP TABLE IF EXISTS `general_chat`;
CREATE TABLE `general_chat` (
  `id_chat` int(99) NOT NULL AUTO_INCREMENT,
  `user` bigint(20) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id_chat`),
  KEY `user` (`user`),
  CONSTRAINT `general_chat_ibfk_2` FOREIGN KEY (`user`) REFERENCES `tbl_ktp` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of general_chat
-- ----------------------------
INSERT INTO `general_chat` VALUES ('1', '123456', '2016-08-12 13:21:26', 'dfsdfsdf');
INSERT INTO `general_chat` VALUES ('2', '123456', '2016-08-12 13:21:38', 'sdfsdfdsf');
INSERT INTO `general_chat` VALUES ('3', '123456', '2016-08-12 13:22:49', 'fdsdfsdf');

-- ----------------------------
-- Table structure for `ronda_tbl`
-- ----------------------------
DROP TABLE IF EXISTS `ronda_tbl`;
CREATE TABLE `ronda_tbl` (
  `ronda_id` int(11) NOT NULL AUTO_INCREMENT,
  `ronda_date` date DEFAULT NULL,
  `ronda_sesi` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ronda_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ronda_tbl
-- ----------------------------
INSERT INTO `ronda_tbl` VALUES ('5', '2016-08-10', 'Terdfdsf');

-- ----------------------------
-- Table structure for `schedule_tbl`
-- ----------------------------
DROP TABLE IF EXISTS `schedule_tbl`;
CREATE TABLE `schedule_tbl` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` bigint(20) DEFAULT NULL,
  `ronda_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`schedule_id`),
  KEY `schedule_nik` (`nik`),
  KEY `ronda_id` (`ronda_id`),
  CONSTRAINT `ronda_id` FOREIGN KEY (`ronda_id`) REFERENCES `ronda_tbl` (`ronda_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `schedule_nik` FOREIGN KEY (`nik`) REFERENCES `tbl_ktp` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of schedule_tbl
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO `tbl_admin` VALUES ('admin', 'adm');
INSERT INTO `tbl_admin` VALUES ('haris', '123');

-- ----------------------------
-- Table structure for `tbl_alamat`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_alamat`;
CREATE TABLE `tbl_alamat` (
  `nik` bigint(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  PRIMARY KEY (`nik`),
  CONSTRAINT `alamat_ktp` FOREIGN KEY (`nik`) REFERENCES `tbl_ktp` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_alamat
-- ----------------------------
INSERT INTO `tbl_alamat` VALUES ('5345', '', '0', '0', '', '', '', '0');
INSERT INTO `tbl_alamat` VALUES ('123456', 'fkdsjflds', '2', '1', 'sdfsd', 'sdfdsf', 'sdfdsf', 'dfs');
INSERT INTO `tbl_alamat` VALUES ('854358', 'sadf', '1', '2', 'skdf', 'sadkf', 'asd', 'sdas');

-- ----------------------------
-- Table structure for `tbl_berita`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_berita`;
CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `tgl` timestamp NULL DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `berita` text,
  `slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_berita`),
  KEY `username` (`username`),
  CONSTRAINT `username` FOREIGN KEY (`username`) REFERENCES `tbl_admin` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_berita
-- ----------------------------
INSERT INTO `tbl_berita` VALUES ('3', 'sdasdsa dfdsf dfdsf', '2016-04-25 10:31:23', 'admin', '', 'sdasdsa-dfdsf-dfdsf');
INSERT INTO `tbl_berita` VALUES ('4', 'desain futuristiik?', '2016-04-25 10:31:31', 'admin', '<p>Sebuah gagasan yang menggambarkan&nbsp;<a href=\"http://global.liputan6.com/read/2455926/mencari-udara-segar-penumpang-buka-pintu-pesawat\">pesawat</a>&nbsp;masa depan telah dibuat oleh Airport Parking &amp; Hotels dan Imperial College London. Mereka membuat desain yang memprediksi bentuk moda transportasi udara pada 30 hingga 40 tahun ke depan.</p>\r\n\r\n<p>Pesawat futuristik itu mempunyai kapasitas hingga 1.000 kursi yang dilengkapi dengan<em>headset</em>&nbsp;virtual serta proyeksi gambar di dinding. Tak hanya itu,&nbsp;<em>lounge</em>&nbsp;luas juga dibuat untuk meningkatkan kenyamanan penumpang.</p>\r\n\r\n<p>Tim tersebut dan juga mahasiswa PhD di bidang desain, Adam Omar, merancang pesawat canggih itu dengan memiliki keunggulan dari jet saat ini dan generasi teknologi selanjutnya.&nbsp;Badan pesawat menjadi lebih lebar dan pendek serta tak memiliki sayap ekor. Moda transportasi udara tersebut, akan dioperasikan oleh enam mesin biofuel yang terdapat di bagian belakang sayap.</p>\r\n\r\n<p>Dengan tubuh lebih lebar dan sayap lebih besar, akan menampung kapasitas hingga 1.000 penumpang. Namun hal tersebut tak mengurangi kenyamanan, karena pesawat itu akan memiliki ruang lebih untuk kaki.</p>\r\n\r\n<p>Tetapi mungkin tak semua orang menyukai konsep tersebut, karena pesawat itu hanya memiliki sedikit jendela. Hal tersebut dikutip dari<em>&nbsp;<a href=\"http://www.dailymail.co.uk/travel/travel_news/article-3487305/Airport-Parking-Hotels-Imperial-College-London-design-concept-plane-predict-flying-like-2050.html\" target=\"_blank\">Daily&nbsp;Mail</a>&nbsp;</em>pada Senin (14/3/2016).</p>\r\n\r\n<p>Sebagai kompensasinya, layar LCD transparan di dinding menampilkan tampilan keadaan di luar pesawat, film, program atau peta dari sistem hiburan dalam penerbangan, atau gambar-gambar yang dapat membuat penumpang rileks.</p>\r\n\r\n<p>Monitor di belakang kursi akan digantikan oleh&nbsp;<em>headset</em>&nbsp;virtual yang terdapat pada masing-masing kursi dengan desain melingkar atau visor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"http://global.liputan6.com/read/2458381/ini-desain-futuristik-pesawat-tahun-2050-keren-atau-ngeri#\"><img src=\"http://cdn1-a.production.liputan6.static6.com/medias/1170469/big/047863000_1457948379-pesawat_kursi2.jpg\" /></a></p>\r\n\r\n<p>Desain pesawat futuristik dengan visor yang terdapat pada setiap kursi (Foto: Airport Parking &amp; Hotels).</p>\r\n\r\n<p>Visor terdapat tepat di depan pandangan penumpang dan dapat memutar film atau gim dalam format 3D. Saat lepas landas, mendarat, atau dalam keadaan darurat, benda tersebut akan melipat secara otomatis.</p>\r\n\r\n<p>Dalam pesawat tersebut, akan terdapat bar yang memungkinkan penumpang untuk keluar dari kursi mereka dan bebas bersosialisasi.</p>\r\n\r\n<p>Selain meningkatkan pengalaman penumpang, tim tersebut bertujuan untuk merancang pesawat yang jauh lebih efisien bahan bakar dan ramah lingkungan.</p>\r\n\r\n<p>Pesawat itu akan dijalankan dengan menggunakan tenaga biofuel rendah emisi dan akan digerakkan dengan serangkaian kipas elektrik yang tenaganya berasal dari mesin kecil.</p>\r\n\r\n<p>Dengan menggunakan teknologi tersebut, moda transportasi futuristik itu hanya menghasilkan emisi rendah jika dibandingkan dengan pesawat saat ini.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"http://global.liputan6.com/read/2458381/ini-desain-futuristik-pesawat-tahun-2050-keren-atau-ngeri#\"><img src=\"http://cdn0-a.production.liputan6.static6.com/medias/1170473/big/093805500_1457948501-pesawat_bar.jpg\" /></a></p>\r\n\r\n<p>Bar yang terdapat di dalam pesawat (Foto: Airport Parking &amp; Hotels).</p>\r\n\r\n<p>Sebagian besar bahan baku dari kursi, lantai dan dinding dibuat dengan logam paling ringan bernama microlattice, yang dikembangkan oleh&nbsp;<a href=\"http://global.liputan6.com/read/2440217/rahasia-di-balik-penggunaan-angka-7-pesawat-boeing\">Boeing</a>.</p>\r\n\r\n<p>Kepala pemasaran Airport Parking &amp; Hotels, Beverly Barden, mengatakan, &quot;Moda transportasi udara telah lama dianggap sebagai cara yang tidak nyaman untuk liburan.&quot;</p>\r\n\r\n<p>&quot;Dengan kemajuan desain di kursi penumpang, hiburan di dalam pesawat, dan ruang ekstra untuk bar dan area relaksasi, membuat hal yang tak nyaman menjadi bagian di masa lalu.&quot;</p>\r\n\r\n<p>&quot;Bekerja sama dengan Imperial College London, kami telah mampu untuk menciptakan model inovatif yang menggambarkan seperti apa perjalanan udara 30 tahun lagi...,&quot; tambahnya.</p>\r\n', 'desain-futuristiik-');
INSERT INTO `tbl_berita` VALUES ('7', 'dasd', '2016-05-26 01:49:35', 'admin', '', 'dasd');
INSERT INTO `tbl_berita` VALUES ('8', 'dasD', '2016-05-26 02:00:56', 'admin', '', 'dasD');

-- ----------------------------
-- Table structure for `tbl_kontak`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kontak`;
CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `judul_kontak` varchar(50) DEFAULT NULL,
  `alamat_kontak` text,
  `email_kontak` varchar(50) DEFAULT NULL,
  `garis_bujur` varchar(50) DEFAULT NULL,
  `garis_lintang` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_kontak
-- ----------------------------
INSERT INTO `tbl_kontak` VALUES ('1', 'Rumah Pak RT', 'Jl Delima Raya C6 No 3 Tambun-Bekasi', 'sdfkj', '-6.2490066', '107.0643017');

-- ----------------------------
-- Table structure for `tbl_ktp`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_ktp`;
CREATE TABLE `tbl_ktp` (
  `nik` bigint(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `gol_darah` varchar(5) DEFAULT NULL,
  `agama` varchar(30) NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `berlaku` date NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_ktp
-- ----------------------------
INSERT INTO `tbl_ktp` VALUES ('5345', 'dsfsdf', 'sdfdsf', '1985-12-10', 'Pria', '', 'islam', '', '', '0', '0000-00-00');
INSERT INTO `tbl_ktp` VALUES ('123456', 'kdjsfl', 'sdfs', '1900-05-11', 'Pria', 'o', 'islam', 'lajang', 'ksjdkal', 'ksfjs', '2016-05-10');
INSERT INTO `tbl_ktp` VALUES ('854358', 'jsdfkd', 'djsf', '1923-05-27', 'Pria', 'o', 'islam', 'jdsh', 'skdjsa', 'WNI', '2016-05-12');

-- ----------------------------
-- Table structure for `tbl_organisasi`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_organisasi`;
CREATE TABLE `tbl_organisasi` (
  `id_org` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `alamat` tinytext,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_org`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_organisasi
-- ----------------------------
INSERT INTO `tbl_organisasi` VALUES ('1', 'RW', 'Harishjhjhkj', '08999805056', '08999805056', 'yutriharis@gmail.com');
INSERT INTO `tbl_organisasi` VALUES ('2', 'RT', 'Dhani', '34234', 'Griya', 'dfsdf@fsdf');
INSERT INTO `tbl_organisasi` VALUES ('3', 'keamanan', 'Tes', '4534534', 'dfd', 'fgdfg@dfgdf.c');
INSERT INTO `tbl_organisasi` VALUES ('4', 'bendahara', 'dfgjjhk', '56456', '56456', 'fdgdfg@fsdf');
INSERT INTO `tbl_organisasi` VALUES ('5', 'sekertaris', 'fjgdfg', '56456', 'dfdsfs', 'dfsdfs@dgdf.com');
INSERT INTO `tbl_organisasi` VALUES ('6', 'humas', 'sdfjdskf', '4534534', 'dsfjsd', 'dskfsd@fdsf.com');
INSERT INTO `tbl_organisasi` VALUES ('7', 'kerohanian', 'sdfjsd', '45345', 'dkfjsd', 'dkfjsdkf@fksdf');
INSERT INTO `tbl_organisasi` VALUES ('8', 'koperasi', 'dskfsdf', 'dskfsdf', 'dskfsdf', 'dskfsdf');
INSERT INTO `tbl_organisasi` VALUES ('9', 'Keamanan 1', 'Arif', '343534', '343534', '343534');
INSERT INTO `tbl_organisasi` VALUES ('10', 'Keamanan 2', 'Wildan', '343534', '343534', 'dkfjsd@fsdfsd.com');

-- ----------------------------
-- Table structure for `tbl_pesan`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pesan`;
CREATE TABLE `tbl_pesan` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_pesan
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_surat`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_surat`;
CREATE TABLE `tbl_surat` (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `nik` bigint(20) DEFAULT NULL,
  `deskripsi` text,
  `tgl` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_surat`),
  KEY `nik` (`nik`),
  CONSTRAINT `nik` FOREIGN KEY (`nik`) REFERENCES `tbl_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_surat
-- ----------------------------
INSERT INTO `tbl_surat` VALUES ('1', '123456', 'dfdf', '2016-08-09 09:28:10');
INSERT INTO `tbl_surat` VALUES ('2', '123456', 'Domisili', '2016-08-09 09:28:19');
INSERT INTO `tbl_surat` VALUES ('3', '123456', 'Domisili', '2016-08-09 09:31:48');
INSERT INTO `tbl_surat` VALUES ('4', '123456', 'fdfdsf', '2016-08-09 09:34:27');
INSERT INTO `tbl_surat` VALUES ('5', '123456', 'fgdfg', '2016-08-09 10:50:04');
INSERT INTO `tbl_surat` VALUES ('6', '123456', 'ddvxcv', '2016-08-09 11:35:21');
INSERT INTO `tbl_surat` VALUES ('7', '123456', 'asasa\r\n', '2016-08-13 20:32:16');
INSERT INTO `tbl_surat` VALUES ('8', '123456', 'asasa\r\n', '2016-08-13 20:32:26');
INSERT INTO `tbl_surat` VALUES ('9', '123456', 'Lapor Diri', '2016-08-13 20:36:37');
INSERT INTO `tbl_surat` VALUES ('10', '123456', 'Lapor Diri', '2016-08-13 20:36:39');
INSERT INTO `tbl_surat` VALUES ('11', '123456', 'ax', '2016-08-13 20:37:07');
INSERT INTO `tbl_surat` VALUES ('12', '123456', 'ax', '2016-08-13 20:37:52');
INSERT INTO `tbl_surat` VALUES ('13', '123456', 'ax', '2016-08-13 20:37:53');
INSERT INTO `tbl_surat` VALUES ('14', '123456', 'sfffdf', '2016-08-13 20:51:50');
INSERT INTO `tbl_surat` VALUES ('15', '123456', 'sfffdf', '2016-08-13 20:52:14');
INSERT INTO `tbl_surat` VALUES ('16', '123456', 'sfffdf', '2016-08-13 20:52:28');
INSERT INTO `tbl_surat` VALUES ('17', '123456', 'Domisili', '2016-08-13 20:53:13');
INSERT INTO `tbl_surat` VALUES ('18', '123456', 'Domisili', '2016-08-13 20:53:50');
INSERT INTO `tbl_surat` VALUES ('19', '123456', 'Domisili', '2016-08-13 20:54:05');
INSERT INTO `tbl_surat` VALUES ('20', '123456', 'Domisili', '2016-08-13 20:55:31');
INSERT INTO `tbl_surat` VALUES ('21', '123456', 'Domisili', '2016-08-13 20:55:34');
INSERT INTO `tbl_surat` VALUES ('22', '123456', 'nmbj', '2016-08-13 20:56:01');
INSERT INTO `tbl_surat` VALUES ('23', '123456', 'nmbj', '2016-08-13 20:56:01');

-- ----------------------------
-- Table structure for `tbl_upload`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload`;
CREATE TABLE `tbl_upload` (
  `id_upload` int(11) NOT NULL AUTO_INCREMENT,
  `judul_gambar` varchar(100) DEFAULT NULL,
  `nama_gambar` varchar(100) DEFAULT NULL,
  `tgl_upload` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_upload`),
  KEY `username` (`username`),
  CONSTRAINT `username_admin` FOREIGN KEY (`username`) REFERENCES `tbl_admin` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_upload
-- ----------------------------
INSERT INTO `tbl_upload` VALUES ('1', 'hgjhghj', 'file_1461808689.jpg', '2016-04-28 08:58:09', 'admin');
INSERT INTO `tbl_upload` VALUES ('2', 'hgjh', 'file_1461808714.jpg', '2016-04-28 08:58:34', 'admin');
INSERT INTO `tbl_upload` VALUES ('3', 'hvgjhg', 'file_1461808765.jpg', '2016-04-28 08:59:25', 'admin');
INSERT INTO `tbl_upload` VALUES ('5', 'kjjk', 'file_1461847518.jpg', '2016-04-28 07:45:18', 'admin');
INSERT INTO `tbl_upload` VALUES ('6', 'jlksdfs', 'file_1461847564.jpg', '2016-04-28 07:46:04', 'admin');
INSERT INTO `tbl_upload` VALUES ('7', 'dsfs', 'file_1461847587.jpg', '2016-04-28 07:46:27', 'admin');

-- ----------------------------
-- Table structure for `tbl_user`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `nik` bigint(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `stat_validasi` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`nik`),
  CONSTRAINT `user_ktp` FOREIGN KEY (`nik`) REFERENCES `tbl_ktp` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('123456', '123456', 'dfsd@sdkjf', '');
INSERT INTO `tbl_user` VALUES ('854358', '123456', 'dskfjds@fdkls', '');
