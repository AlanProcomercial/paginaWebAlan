resumen: esta pagina funciona como frontend para una base de datos. 
	Vas a poder buscar productos y revisar sus datos. y despues dejar una orden por ellos

estructura:

lista_prestadores.php:
primero el buscador, busca a los prestadores 
y te los muestra en una lista, mostrando sus datos resumidos.

prestador_new.html: 
este es para ingresar los datos de un nuevo prestador. 
Envía los datos a la base de datos. esta todo en mysql

prestador_edit.html:
este te deja editar los datos de un prestador.

prestador_view.html:
este te deja ver los datos de un prestador. no muestra todos
solo los que son para el usuario.

base de datos:
los videos y las imagenes se guardan como url hay que buscarse un lugar donde hostearlas.
hay una tabla prestadores que contiene los siguientes datos:

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
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `imagenPerfil` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`prestadorId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;
