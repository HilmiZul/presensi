-- -------------------------------------------------------------
-- TablePlus 4.8.8(450)
--
-- https://tableplus.com/
--
-- Database: DB_PKL_KPPN
-- Generation Time: 2022-09-21 15:27:47.3040
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `tb_peserta`;
CREATE TABLE `tb_peserta` (
  `id_peserta` int NOT NULL,
  `NIS` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `seksi` varchar(255) DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `sekolah` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_peserta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `tb_presensi`;
CREATE TABLE `tb_presensi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_peserta` int DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `keterangan` tinyint(1) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE `tb_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(7) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `tb_peserta` (`id_peserta`, `NIS`, `nama`, `seksi`, `id_user`, `sekolah`) VALUES
(1, '99221133', 'Mimi Hacti', 'Bank', 3, 'SMKN 4 Tasikmalaya'),
(2, '999', 'ZUL HILMI', 'ADMINISTRATOR', 1, NULL),
(8, '1122334455', 'Laila Sari', 'bank', 4, 'SMKN 4 Tasikmalaya');

INSERT INTO `tb_presensi` (`id`, `id_peserta`, `waktu`, `keterangan`, `foto`) VALUES
(1, 8, '2022-09-21 15:11:12', 1, '2022.09.21 - 08.11.12am .jpeg'),
(2, 8, '2022-09-21 15:12:30', 1, '2022.09.21 - 08.12.30am .jpeg'),
(3, 8, '2022-09-21 15:15:26', 1, '2022.09.21 - 08.15.26am .jpeg'),
(4, 8, '2022-09-21 15:16:11', 1, '2022.09.21 - 08.16.11am .jpeg');

INSERT INTO `tb_users` (`id`, `username`, `password`, `level`) VALUES
(1, 'zul', '356a192b7913b04c54574d18c28d46e6395428ab', 'admin'),
(3, 'mimi', '356a192b7913b04c54574d18c28d46e6395428ab', 'peserta'),
(4, 'sari', '356a192b7913b04c54574d18c28d46e6395428ab', 'peserta');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;