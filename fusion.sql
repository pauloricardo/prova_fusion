-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.19-log - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para prova_fusion_dms
CREATE DATABASE IF NOT EXISTS `prova_fusion_dms` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `prova_fusion_dms`;

-- Copiando estrutura para tabela prova_fusion_dms.motoristas
CREATE TABLE IF NOT EXISTS `motoristas` (
  `matricula` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(9) NOT NULL,
  `ativo` tinyint(4) NOT NULL DEFAULT '1',
  `data_admissao` date NOT NULL,
  `tipo_contrato` enum('E','T') NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela prova_fusion_dms.motoristas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `motoristas` DISABLE KEYS */;
INSERT INTO `motoristas` (`matricula`, `nome`, `telefone`, `ativo`, `data_admissao`, `tipo_contrato`) VALUES
	(25, 'teste134444', '213123333', 1, '2017-08-01', 'E'),
	(26, 'teste22333', '224331991', 0, '2017-04-01', 'T'),
	(27, 'teste2', '22433199', 1, '2017-08-01', 'E'),
	(28, 'teste2', '22433199', 1, '2017-08-01', 'E'),
	(29, 'teste2', '22433199', 1, '2017-08-01', 'E'),
	(31, 'teste2', '224331990', 1, '2017-08-01', 'E'),
	(32, 'teste2', '224331999', 1, '2017-08-01', 'E'),
	(33, 'teste2', '224331999', 1, '2017-08-01', 'E'),
	(34, 'teste2', '224331999', 1, '2017-08-01', 'E'),
	(35, 'teste2', '224331999', 1, '2017-08-01', 'E'),
	(36, 'teste2', '224331999', 1, '2017-08-01', 'E');
/*!40000 ALTER TABLE `motoristas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
