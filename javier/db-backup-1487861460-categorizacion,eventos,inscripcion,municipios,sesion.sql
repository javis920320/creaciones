DROP TABLE categorizacion;

CREATE TABLE `categorizacion` (
  `id_categoria` int(4) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

INSERT INTO categorizacion VALUES("1","Agrupaciones");
INSERT INTO categorizacion VALUES("2","Artes escenicas");
INSERT INTO categorizacion VALUES("3","Artes literarias");
INSERT INTO categorizacion VALUES("4","Artes plasticas");
INSERT INTO categorizacion VALUES("5","Artes visuales");
INSERT INTO categorizacion VALUES("6","Artesanias");
INSERT INTO categorizacion VALUES("7","Bibliotecas");
INSERT INTO categorizacion VALUES("8","Carrozas");
INSERT INTO categorizacion VALUES("9","Centros de formacion");
INSERT INTO categorizacion VALUES("10","Cine");
INSERT INTO categorizacion VALUES("11","Comparsas");
INSERT INTO categorizacion VALUES("12","Compositores");
INSERT INTO categorizacion VALUES("13","Cuenteros");
INSERT INTO categorizacion VALUES("14","Danza");
INSERT INTO categorizacion VALUES("15","Disfracez");
INSERT INTO categorizacion VALUES("16","Editorial");
INSERT INTO categorizacion VALUES("17","Escuelas de formacion artistica");
INSERT INTO categorizacion VALUES("18","Fabricantes de instrumentos musicales");
INSERT INTO categorizacion VALUES("19","Gastronomia");
INSERT INTO categorizacion VALUES("20","Gestores culturales");
INSERT INTO categorizacion VALUES("21","Murga");
INSERT INTO categorizacion VALUES("22","Museos");
INSERT INTO categorizacion VALUES("23","Musica");
INSERT INTO categorizacion VALUES("24","Novelistas");
INSERT INTO categorizacion VALUES("25","ONG cultural");
INSERT INTO categorizacion VALUES("26","Oradores");
INSERT INTO categorizacion VALUES("27","Poetas");
INSERT INTO categorizacion VALUES("28","Radio");
INSERT INTO categorizacion VALUES("29","Salas de teatro");
INSERT INTO categorizacion VALUES("30","Teatro");
INSERT INTO categorizacion VALUES("31","Television");
INSERT INTO categorizacion VALUES("32","Turismo cultural");



DROP TABLE eventos;

CREATE TABLE `eventos` (
  `id_evento` int(6) NOT NULL AUTO_INCREMENT COMMENT 'Identificaci�n �nica para el evento',
  `nom_evento` varchar(50) NOT NULL COMMENT 'Nombre del evento a inscribir',
  `inicio_evento` date NOT NULL COMMENT 'Fecha de inicio del evento',
  `fin_evento` date NOT NULL COMMENT 'Fecha de terminaci�n del evento',
  `hora_evento` time NOT NULL COMMENT 'Hora de realizaci�n del evento',
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha autom�tica de registro del evento',
  `organizador` varchar(100) NOT NULL COMMENT 'Nombre del organizador que debe estar inscrito previamente en la tabla inscripcion',
  `publico` varchar(2) NOT NULL DEFAULT 'no' COMMENT 'Etado de publicaci�n al que solo tiene derecho a cambiar el usuario registrado',
  `ben_n` int(7) NOT NULL DEFAULT '0' COMMENT 'Numero de beneficiarios ni�os',
  `ben_m` int(7) NOT NULL DEFAULT '0' COMMENT 'Numero de beneficiarios mujeres',
  `ben_h` int(7) NOT NULL DEFAULT '0' COMMENT 'Numero de beneficiarios hombres',
  `benafro` int(7) NOT NULL,
  `bendisc` int(7) NOT NULL,
  `benmayor` int(7) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `foto` varchar(300) NOT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

INSERT INTO eventos VALUES("12","qwerty","2014-03-19","2014-03-05","02:23:00","2014-03-21 12:33:27","werqqqte","si","1","11","1","0","0","0","","");
INSERT INTO eventos VALUES("13","qwewqwqr","2014-03-06","2014-03-06","01:00:00","2014-03-21 12:34:49","0","si","1","1","1","0","0","0","","");
INSERT INTO eventos VALUES("14","qwewqwqr","2014-03-06","2014-03-06","01:00:00","2014-03-21 12:35:26","5978","si","1","1","1","0","0","0","","");
INSERT INTO eventos VALUES("15","Visita la Cocha","2014-03-07","2014-03-08","23:00:00","2014-03-21 12:38:44","5443210","si","1","0","0","0","0","0","","");
INSERT INTO eventos VALUES("16","Visita la Cocha","2014-03-07","2014-03-08","23:00:00","2014-03-21 12:39:21","5978","si","1","0","0","0","0","0","","");
INSERT INTO eventos VALUES("17","Visita la Cocha","2014-03-07","2014-03-08","23:00:00","2014-03-21 12:52:37","5978","si","1","0","0","0","0","0","","");
INSERT INTO eventos VALUES("26","qwewqwqr","2014-03-19","2014-03-05","14:02:00","2014-03-25 11:41:20","764","si","2","2","2","0","0","0","","ipiales.png");
INSERT INTO eventos VALUES("27","444","2014-03-05","2014-03-25","16:04:00","2014-03-25 11:58:59","1085","si","4","4","4","0","0","0","","MapaNarinoDptot.jpg");
INSERT INTO eventos VALUES("28","2","2014-03-04","2014-03-04","15:03:00","2014-03-25 12:16:57","0","si","3","3","3","0","0","0","","ubicación.png");
INSERT INTO eventos VALUES("32","24","2014-03-04","2014-03-04","15:03:00","2014-03-25 12:24:57","1","si","3","3","3","0","0","0","Ipiales","servicios_auditoria_icono.png");
INSERT INTO eventos VALUES("33","CUENTOS POR IPIALES","2014-03-14","2014-03-08","14:02:00","2014-03-25 16:40:42","121111111","si","2","2","2","0","0","0","IPIALES","ipiales.png");
INSERT INTO eventos VALUES("34","VISITA LA COCHA","2014-04-17","2014-04-09","03:00:00","2014-04-03 11:51:03","99","si","4","3","4","0","9","0","LA CRUZ","Concurso_Alas_para_la_Juventud.jpg");
INSERT INTO eventos VALUES("35","VISITA LA COCHA","2014-04-17","2014-04-09","03:00:00","2014-04-03 11:53:16","99","si","4","3","4","0","9","0","LA CRUZ","alas.jpg");
INSERT INTO eventos VALUES("36","VISITA LA COCHA","2014-04-03","2014-04-03","03:03:00","2014-04-03 11:57:47","1221","si","2","432","45","100","0","0","EL ROSARIO","sin_imagen.png");
INSERT INTO eventos VALUES("37","VISITA LA COCHA","2014-04-03","2014-04-03","03:03:00","2014-04-03 11:57:56","1221","si","2","432","45","100","0","0","EL ROSARIO","alas.jpg");
INSERT INTO eventos VALUES("38","VISITA LA COCHA","2014-04-03","2014-04-03","03:03:00","2014-04-03 11:58:09","1221","si","2","432","45","100","0","0","EL ROSARIO","datos db conexcol.txt");
INSERT INTO eventos VALUES("39","QWEWQWQR","2014-04-02","2014-04-04","17:05:00","2014-04-03 11:59:21","1231","si","1","1","0","0","9000","0","BELEN","location-outline_318-10602.jpg");
INSERT INTO eventos VALUES("40","GUITARRA","2016-04-06","2016-04-29","02:00:00","2016-04-28 10:31:14","666","no","1","1","1","1","1","1","CONSACA","sin_imagen.png");
INSERT INTO eventos VALUES("41","GUITARRA","2016-04-28","2016-04-30","00:12:00","2016-04-28 10:46:24","764","no","10","10","10","101","10","10","CONSACA","PELUCAS  BIGOTES GAFAS (13).png");



DROP TABLE inscripcion;

CREATE TABLE `inscripcion` (
  `id` int(5) NOT NULL,
  `categorizacion` varchar(50) NOT NULL,
  `razon` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `modalidad` varchar(20) NOT NULL,
  `trayectoria` date NOT NULL,
  `correo` varchar(70) NOT NULL,
  `url` varchar(200) NOT NULL DEFAULT 'No Ingresado',
  `telefono` varchar(20) NOT NULL,
  `municipio` varchar(20) NOT NULL,
  `foto` varchar(200) NOT NULL DEFAULT 'sin_imagen.png',
  `publicado` varchar(3) DEFAULT 'no',
  `fregistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Datos b�sicos del registro de los participantes de cultura en Nari�o';

INSERT INTO inscripcion VALUES("0","","","","","","","0000-00-00","","","","","","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("1","Agrupaciones","","","","","individual","0000-00-00","","","","","","no","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("12","Artes escenicas","3","VILLOTA JACOME","dfref","cra 4 N° 9-64 B/Libertad","individual","0000-00-00","ivancho.k@hotmail.es","","3188107171","ipiales","sin_imagen.png","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("99","GESTORES CULTURALES","INERRANCIAS TEATRALES","OLGUIN SARRIA","MARCO ANTONIO","B/San Fernando","individual","2004-01-05","itinerancias@gmail.com","","1243222","EL CHARCO","521750_686672571352696_4974632_n.jpg","si","2014-03-31 10:21:32");
INSERT INTO inscripcion VALUES("123","Agrupaciones","cuentos de nariño","jojoy pastas","gilberto samora","carrera 23 No 2-64 B/Santiago Apostol","grupo","0000-00-00","cuenterosdenarino@hotmail.com","","219392-231","San- -juan de Pasto","Concierto_Chavelita.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("666","Escuelas de formacion artistica","servicios guitarra","jojoy pastas","gilberto samora","cra 4 N° 9-64 B/Libertad","grupo","2014-03-03","cuenterosdenarino@hotmail.com","","3188107171","Cuaspud Carlosama","251191_493013320738545_1094685358_n.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("764","Agrupaciones","Bailes andinos","bladimir","Putin","cra 23 -45 B/Manzano","grupo","0000-00-00","danzas@andinas.com","","123","Ipiales","142376.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("777","Agrupaciones","cuentos de nariño","VILLOTA JACOME","dfref","carrera 23 No 2-64 B/Santiago Apostol","individual","0000-00-00","ivancho.k@hotmail.es","","3188107171","El","800px-Panoramica_20_julio.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("786","Agrupaciones","cuentos de nariño","VILLOTA JACOME","CRISTIAN DAVID","cra 4 N° 9-64 B/Libertad","individual","2014-03-05","cristiandavid.vj@hotmail.com","","3188107171","Belen","441994 (1).jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("999","Agrupaciones","","","","","individual","0000-00-00","","","","San","251191_493013320738545_1094685358_n.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("1085","Artesanias","Arteanias barbacoas","basante","aurelio","cra4-666","grupo","2008-10-29","cuenterosdenarino@hotmail.com","","98689980","barbacoas","142376.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("1089","Fabricantes de instrumentos mu","","","","","individual","0000-00-00","","","","135","","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("1090","Fabricantes de instrumentos musicales","","","","","individual","0000-00-00","","","","135","","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("1091","Fabricantes de instrumentos musicales","","","","","individual","0000-00-00","","","","135","","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("1211","cine 80","","","","","individual","0000-00-00","","","","La Union","E6B.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("1212","Agrupaciones","","","","","individual","0000-00-00","cristiandavid.vj@hotmail.com","","","Olaya","","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("1221","CENTROS DE FORMACION","CUENTOS DE NARIñO","JOJOY PASTAS","GILBERTO SAMORA","carrera 23 No 2-64 B/Santiago Apostol","grupo","2014-03-04","ivancho.k@hotmail.es","http://cuentos.org","3188107171","IPIALES","","si","2014-03-24 21:55:44");
INSERT INTO inscripcion VALUES("1231","Agrupaciones","cuentos de nariño","VILLOTA JACOME","CRISTIAN DAVID","cra 4 N° 9-64 B/Libertad","individual","0000-00-00","ivancho.k@hotmail.es","","3188107171","ipiales","","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("1233","Artes","cuentos de nariño","","","","individual","0000-00-00","","","","El","8ubzj.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("1243","3","","","","","individual","0000-00-00","","","","129","","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("1277","Agrupaciones","","","","","individual","0000-00-00","","","3188107171","El","120126183430_respuestas_estrella_304x171_spl.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("1299","AGRUPACIONES","CUENTOS DE NARIñO","","","","individual","2014-03-04","cristiandavid.vj@hotmail.com","","3188107171","IPIALES","ipiales.png","si","2014-03-24 22:36:12");
INSERT INTO inscripcion VALUES("1401","BIBLIOTECAS","BIBLIOTECA CAPILLOS","NARVAEZ","LUCELI","B/San Fernando","individual","1944-02-08","bibliotecacoculos@gmail.com","","12345","SAMANIEGO","ABRAZO.jpg","si","2014-03-31 10:34:32");
INSERT INTO inscripcion VALUES("2132","wer","23","23","23","23","23","2014-03-04","23","No Ingresado","23","23","sin_imagen.png","si","2014-03-24 21:57:18");
INSERT INTO inscripcion VALUES("2134","Agrupaciones","","","","","individual","0000-00-00","","","","ipiales","441991.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("2222","Artes","","","","","individual","0000-00-00","","","","San","","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("5978","FABRICANTES DE INSTRUMENTOS MUSICALES","CUENTOS DE NARIñO","VILLOTA JACOME","GILBERTO SAMORA","cra 4 N° 9-64 B/Libertad","individual","2014-03-05","cristiandavid.vj@hotmail.com","http://cuentos.org","3188107171","IPIALES","ipiales.png","si","2014-03-21 12:21:50");
INSERT INTO inscripcion VALUES("6444","Artes plasticas","ETETQ","QWETERTQ","ERQTQRET","EQTQTQET","individual","2014-03-27","cristiandavid.vj@hotmail.com","","3188107171","SAN JUAN DE PASTO","images.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("7771","Agrupaciones","cuentos de nariño","VILLOTA JACOME","dfref","carrera 23 No 2-64 B/Santiago Apostol","individual","0000-00-00","ivancho.k@hotmail.es","","3188107171","Narino","zombies-h.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("7862","Agrupaciones","cuentos de nariño","VILLOTA JACOME","CRISTIAN DAVID","cra 4 N° 9-64 B/Libertad","individual","2014-03-05","cristiandavid.vj@hotmail.com","","3188107171","Belen","VOLANTE_VAMOS_A_LA_CONCHA.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("8889","Agrupaciones","","","","","individual","0000-00-00","","","","El","tattu.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("9998","GESTORES CULTURALES","CUENTOS DE NARIñO","VILLOTA JACOME","CRISTIAN DAVID","cra 4 N° 9-64 B/Libertad","grupo","2014-03-04","cristiandavid.vj@hotmail.com","http://cuentos.org","3188107171","GUALMATAN","","si","2014-03-24 22:17:22");
INSERT INTO inscripcion VALUES("12000","AGRUPACIONES","CUENTOS DE NARIñO","VILLOTA JACOME","","","grupo","2014-03-12","ivancho.k@hotmail.es","","3188107171","IPIALES","sin_imagen.png","si","2014-03-24 22:32:22");
INSERT INTO inscripcion VALUES("12111","AGRUPACIONES","CUENTOS DE NARIñO","VILLOTA JACOME","CRISTIAN DAVID","cra 4 N° 9-64 B/Libertad","individual","2014-03-04","cristiandavid.vj@hotmail.com","http://cuentos.org","3188107171","GUALMATAN","MapaNarinoDptot.jpg","si","2014-03-24 22:21:18");
INSERT INTO inscripcion VALUES("12211","CENTROS DE FORMACION","CUENTOS DE NARIñO","JOJOY PASTAS","GILBERTO SAMORA","carrera 23 No 2-64 B/Santiago Apostol","grupo","2014-03-04","ivancho.k@hotmail.es","http://cuentos.org","3188107171","IPIALES","","si","2014-03-24 21:56:31");
INSERT INTO inscripcion VALUES("12332","CUENTEROS","CUENTOS DE NARIñO","VILLOTA JACOME","GILBERTO SAMORA","carrera 23 No 2-64 B/Santiago Apostol","grupo","2014-03-03","ivancho.k@hotmail.es","","3188107171","SAN JUAN DE PASTO","Free Spot.jpg","si","2014-03-19 21:32:33");
INSERT INTO inscripcion VALUES("12344","Fabricantes de instrumentos mu","3","VILLOTA JACOME","CRISTIAN DAVID","cra 4 N° 9-64 B/Libertad","grupo","0000-00-00","ivancho.k@hotmail.es","","3188107171","ipiales","Imagen_Medalla_a_la_Maestra_Artesanal_2014.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("12999","Artes","cuentos de nariño","","","","individual","0000-00-00","","","","Cuaspud","788.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("32888","Agrupaciones","cuentos de nariño","8","dfref","","individual","0000-00-00","","","","El","tattu.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("78623","Agrupaciones","cuentos de nariño","VILLOTA JACOME","CRISTIAN DAVID","cra 4 N° 9-64 B/Libertad","individual","2014-03-05","cristiandavid.vj@hotmail.com","","3188107171","Belen","399453.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("98393","Escuelas de formacion artistica","Cantantes ","rosero","juan","cra 4 N° 9-64 B/Libertad","individual","2014-03-05","cristiandavid.vj@hotmail.com","","3188107171","Magui Payan","E6B.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("121213","FABRICANTES DE INSTRUMENTOS MUSICALES","ARTEANIAS BARBACOAS","JOJOY PASTAS","GILBERTO SAMORA","carrera 23 No 2-64 B/Santiago Apostol","individual","2014-03-04","ivancho.k@hotmail.es","http://cuentos.org","23424","IPIALES","ubicación.png","si","2014-03-24 18:14:30");
INSERT INTO inscripcion VALUES("122143","ARTES ESCENICAS","CUENTOS DE NARIñO","VILLOTA JACOME","CRISTIAN DAVID","cra 4 N° 9-64 B/Libertad","individual","2014-03-05","cristiandavid.vj@hotmail.com","http://cuentos.org","3188107171","IPIALES","","si","2014-03-24 21:58:17");
INSERT INTO inscripcion VALUES("124455","18","","","","","individual","0000-00-00","","","","El","","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("127776","Fabricantes de instrumentos musicales","cuentos de nariño","VILLOTA JACOME","CRISTIAN DAVID","cra 4 N° 9-64 B/Libertad","grupo","1990-12-22","cristiandavid.vj@hotmail.com","http://cuentos.org","3188107171","Ipiales","bender.jpg","si","2014-03-19 18:20:16");
INSERT INTO inscripcion VALUES("324567","Musica","samba y folclor","pantija","wilson","carrera 23 No 2-64 B/Santiago Apostol","individual","0000-00-00","cristiandavid.vj@hotmail.com","","3188107171","La cruz","Concierto_en_Homenaje_a_la_Mujer_Nariense.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("1222200","Agrupaciones","cuentos de nariño","VILLOTA JACOME","CRISTIAN DAVID","carrera 23 No 2-64 B/Santiago Apostol","individual","2014-02-24","ivancho.k@hotmail.es","","3188107171","El","Thomas-Zimmer.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("1231131","9","","","","","individual","0000-00-00","","","","Magui","","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("1234455","Agrupaciones","","","","","individual","0000-00-00","","","","El","Thomas-Zimmer1.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("1241243","FABRICANTES DE INSTRUMENTOS MUSICALES","WERRERE","WERWER","TBYTHDR","efqwefqfqfq","individual","2014-03-03","cristiandavid.vj@hotmail.com","http://cuentos.org","3188107171","BELEN","cuarto iluminado.jpg","si","2014-03-19 21:20:10");
INSERT INTO inscripcion VALUES("4546456","Agrupaciones","","","","","individual","0000-00-00","","","","","173657.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("5443210","Fabricantes de instrumentos mu","cuentos de nariño","VILLOTA JACOME","CRISTIAN DAVID","carrera 23 No 2-64 B/Santiago Apostol","individual","0000-00-00","cristiandavid.vj@hotmail.com","","3188107171","ipiales","","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("32456543","Agrupaciones","cuentos de nariño","VILLOTA JACOME","CRISTIAN DAVID","cra 4 N° 9-64 B/Libertad","individual","0000-00-00","cristiandavid.vj@hotmail.com","","3188107171","l CRUZ","32456543DSC_0096.JPG","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("36999600","ESCUELAS DE FORMACION ARTISTICA","ESCULA GUITARRA","JOJOY PASTAS","GILBERTO SAMORA","cra 4 N° 9-64 B/Libertad","grupo","1989-07-12","ivancho.k@hotmail.es","http://cuentos.org","3188107171","IPIALES","luz omni.jpg","si","2014-03-19 21:47:14");
INSERT INTO inscripcion VALUES("98333840","Gestores culturales","Marcos Salazar","Salasar","Marcos","calle 21N31C 46","individual","1996-06-02","marcos.fidet@gmail.com","","3137224477","San Juan de Pasto","lulzsec-anonymous.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("121111111","AGRUPACIONES","CUENTOS DE NARIñO","","","","grupo","2014-02-26","cristiandavid.vj@hotmail.com","","23424","ALDANA","servicios_auditoria_icono.png","si","2014-03-24 22:44:16");
INSERT INTO inscripcion VALUES("123166666","Agrupaciones","cuentos de nariño","VILLOTA JACOME","CRISTIAN DAVID","cra 4 N° 9-64 B/Libertad","grupo","2014-03-03","cristiandavid.vj@hotmail.com","","23424","El","lulzsec-anonymous.jpg","si","2014-03-19 18:07:10");
INSERT INTO inscripcion VALUES("242354612","Artes plasticas","strtoupper(wwwssdddrrr)","VILLOTA JACOME","","","individual","2014-03-03","cristiandavid.vj@hotmail.com","http://cuentos.org","3188107171","Ipiales","con bump.jpg","si","2014-03-19 18:25:44");
INSERT INTO inscripcion VALUES("1082749003","AGRUPACIONES","NO","MELO","JHAYBER","asaas","individual","2012-01-01","jhayber@misena.edu.co","","3205583220","BELEN","sin_imagen.png","no","2016-04-28 10:30:04");
INSERT INTO inscripcion VALUES("1211111111","AGRUPACIONES","CUENTOS DE NARIñO","","","","grupo","2014-02-26","cristiandavid.vj@hotmail.com","","23424","ALDANA","sin_imagen.png","si","2014-03-24 22:44:00");
INSERT INTO inscripcion VALUES("2147483647","Agrupaciones","cuentos de nariño","VILLOTA JACOME","CRISTIAN DAVID","cra 4 N° 9-64 B/Libertad","grupo","0000-00-00","cristiandavid.vj@hotmail.com","","3188107171","l CRUZ","Concierto_Chavelita.jpg","si","2014-03-19 18:07:10");



DROP TABLE municipios;

CREATE TABLE `municipios` (
  `id_municipio` int(4) NOT NULL AUTO_INCREMENT,
  `municipio` varchar(30) NOT NULL,
  PRIMARY KEY (`id_municipio`)
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=utf8;

INSERT INTO municipios VALUES("1","Belen");
INSERT INTO municipios VALUES("2","El Penol");
INSERT INTO municipios VALUES("125","Colon");
INSERT INTO municipios VALUES("126","El rosario");
INSERT INTO municipios VALUES("127","El Tablon");
INSERT INTO municipios VALUES("128","La Cruz");
INSERT INTO municipios VALUES("129","La Union");
INSERT INTO municipios VALUES("130","Leiva");
INSERT INTO municipios VALUES("131","Policarpa");
INSERT INTO municipios VALUES("132","SanBernardo");
INSERT INTO municipios VALUES("133","San Lorenzo");
INSERT INTO municipios VALUES("134","San Pablo");
INSERT INTO municipios VALUES("135","San Pedro");
INSERT INTO municipios VALUES("136","Taminango");
INSERT INTO municipios VALUES("137","Buesaco");
INSERT INTO municipios VALUES("138","Chachagui");
INSERT INTO municipios VALUES("139","Potosi");
INSERT INTO municipios VALUES("140","Gualmatan");
INSERT INTO municipios VALUES("141","Cumbal");
INSERT INTO municipios VALUES("142","Guachucal");
INSERT INTO municipios VALUES("143","Barbacoas");
INSERT INTO municipios VALUES("144","Francisco Pizarro");
INSERT INTO municipios VALUES("145","La Tola");
INSERT INTO municipios VALUES("146","Magui Payan");
INSERT INTO municipios VALUES("147","Mosquera");
INSERT INTO municipios VALUES("148","Olaya Herrera");
INSERT INTO municipios VALUES("149","El Charco");
INSERT INTO municipios VALUES("150","Roberto Payan");
INSERT INTO municipios VALUES("151","Santa Barbara");
INSERT INTO municipios VALUES("152","Tumaco");
INSERT INTO municipios VALUES("153","Aldana");
INSERT INTO municipios VALUES("154","Contadero");
INSERT INTO municipios VALUES("155","Cuaspud Carlosama");
INSERT INTO municipios VALUES("156","Funes");
INSERT INTO municipios VALUES("157","Puerres");
INSERT INTO municipios VALUES("158","Pupiales");
INSERT INTO municipios VALUES("159","Alban");
INSERT INTO municipios VALUES("160","Arboleda");
INSERT INTO municipios VALUES("161","Consaca");
INSERT INTO municipios VALUES("162","El Tambo");
INSERT INTO municipios VALUES("165","La Florida");
INSERT INTO municipios VALUES("166","Narino");
INSERT INTO municipios VALUES("167","San Juan de Pasto");
INSERT INTO municipios VALUES("168","Sandona");
INSERT INTO municipios VALUES("169","Tangua");
INSERT INTO municipios VALUES("170","Yacuanquer");
INSERT INTO municipios VALUES("171","Ancuya");
INSERT INTO municipios VALUES("172","Cumbitara");
INSERT INTO municipios VALUES("173","Guaitarilla");
INSERT INTO municipios VALUES("174","Imues");
INSERT INTO municipios VALUES("175","La Llanada");
INSERT INTO municipios VALUES("176","Linares");
INSERT INTO municipios VALUES("177","Los Andes");
INSERT INTO municipios VALUES("178","Mallama");
INSERT INTO municipios VALUES("179","Ospina");
INSERT INTO municipios VALUES("180","Providencia");
INSERT INTO municipios VALUES("181","Ricaurte");
INSERT INTO municipios VALUES("182","Tuquerres");
INSERT INTO municipios VALUES("183","Samaniego");
INSERT INTO municipios VALUES("184","Santacruz");
INSERT INTO municipios VALUES("186","Sapuyes");
INSERT INTO municipios VALUES("187","Ipiales");



DROP TABLE sesion;

CREATE TABLE `sesion` (
  `id_sesion` int(4) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  PRIMARY KEY (`id_sesion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO sesion VALUES("1","admin","123");



