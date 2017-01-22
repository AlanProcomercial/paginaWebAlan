resumen: esta pagina funciona como frontend para una base de datos. 
	Vas a poder buscar productos y revisar sus datos. y despues dejar una orden por ellos

estructura:

lista_prestadores.php:
primero el buscador, busca a los prestadores 
y te los muestra en una lista, mostrando sus datos resumidos.

addPrestador.php:
agrega los datos a la base de datos.

prestador_new.html: 
este es para ingresar los datos de un nuevo prestador. 
Envía los datos a la base de datos. esta todo en mysql

prestador_edit.html:
este te deja editar los datos de un prestador.

prestador_view.html:
este te deja ver los datos de un prestador. no muestra todos
solo los que son para el usuario.
hay que agregar el video tanto a la pagina como a la base de datos, una vez que se encuentre un lugar donde hostearlos.

base de datos:
los videos y las imagenes se guardan como url hay que buscarse un lugar donde hostearlas.
hay una tabla prestadores que contiene los siguientes datos:

--
-- Database: `a4171482_prest`
--

-- --------------------------------------------------------

--
-- Table structure for table `Prestadores`
--

CREATE TABLE `Prestadores` (
  `prestadorId` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `lastname` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `pseudoname` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `description` varchar(420) COLLATE latin1_general_ci DEFAULT NULL,
  `hide` tinyint(1) NOT NULL DEFAULT '1',
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `imagenPerfil` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`prestadorId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Prestadores`
--

INSERT INTO `Prestadores` VALUES(1, 'nombre', 'apellidoTest', 'pseudoTest', 'test@test.com', 'descripcion bien larga como para que ocupe todo un parrafo asi no queda tan vacia la pagina. Descripcion bien larga como para que ocupe todo un parrafo asi no queda tan vacia la pagina.', 0, '2017-01-19 14:52:37', 'http://www.arkivperu.com/blog/wp-content/uploads/2011/05/Lynda-Carter.jpg');
INSERT INTO `Prestadores` VALUES(2, 'juliana', 'Perez', 'coco', 'juliojulio@perez.com.ar', 'bla bla b555555555 55555555 5555555 5555555 555555 555555  hj', 0, '2017-01-19 07:24:38', 'http://www.arkivperu.com/blog/wp-content/uploads/2011/05/Lynda-Carter.jpg');
INSERT INTO `Prestadores` VALUES(8, '', '', '', '', '', 0, '2017-01-21 12:57:56', '');
INSERT INTO `Prestadores` VALUES(3, 'martin', 'Perez', 'perro2121', 'pppppsssss@perez.com.ar', 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla ', 0, '2017-01-12 14:35:28', 'http://www.arkivperu.com/blog/wp-content/uploads/2011/05/Lynda-Carter.jpg');
INSERT INTO `Prestadores` VALUES(4, '11111', '2222', 'coco2', '33333', '444444', 0, '2017-01-12 14:35:35', 'http://www.arkivperu.com/blog/wp-content/uploads/2011/05/Lynda-Carter.jpg');
INSERT INTO `Prestadores` VALUES(5, 'pepe', 'ssss', 'jorgeloco', 'mcmcmcm', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 0, '2017-01-19 07:27:34', 'http://www.arkivperu.com/blog/wp-content/uploads/2011/05/Lynda-Carter.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `PrestadoresTags`
--

CREATE TABLE `PrestadoresTags` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `prestador` int(6) DEFAULT NULL,
  `tag` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tag` (`tag`),
  KEY `prestador` (`prestador`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `PrestadoresTags`
--

INSERT INTO `PrestadoresTags` VALUES(1, 1, 2);
INSERT INTO `PrestadoresTags` VALUES(2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Tags`
--

CREATE TABLE `Tags` (
  `tagId` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`tagId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Tags`
--

INSERT INTO `Tags` VALUES(1, 'alto');
INSERT INTO `Tags` VALUES(2, 'bajo');
INSERT INTO `Tags` VALUES(3, 'ancho');
INSERT INTO `Tags` VALUES(4, 'fino');