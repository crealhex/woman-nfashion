# CREATE DATABASE dbroxana;
USE dbroxana;

CREATE TABLE admin(
  `username` char(16) NOT NULL,
  `password` char(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(100) DEFAULT NULL,
  `idcategoria` int(10) unsigned DEFAULT NULL,
  `precio` float(7,2) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `stock` int(10) unsigned NOT NULL,
  `marca` char(100) NOT NULL,
  `oferta` int(11) DEFAULT NULL,
  PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB AUTO_INCREMENT=1041 DEFAULT CHARSET=latin1;

CREATE TABLE `categoria` (
  `idcategoria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `denominacion` char(60) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

CREATE TABLE `cliente` (
  `idcliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL DEFAULT '',
  `direccion` varchar(80) NOT NULL DEFAULT '',
  `telefono` char(10) NOT NULL,
  `fecha` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `detalle_pedido` (
  `idpedido` int(10) unsigned NOT NULL DEFAULT '0',
  `idproducto` char(16) NOT NULL DEFAULT '',
  `precio` float(7,2) DEFAULT NULL,
  `cantidad` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`idpedido`,`idproducto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `pedido` (
  `idpedido` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idcliente` int(10) unsigned NOT NULL,
  `monto` float(7,2) DEFAULT NULL,
  `fecha` date NOT NULL,
  `ship_city` char(30) NOT NULL,
  PRIMARY KEY (`idpedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# ---------PARA LIMPIAR TABLAS---------
# -------------------------------------
# TRUNCATE TABLE admin;
# TRUNCATE TABLE cliente;
# TRUNCATE TABLE categoria;
# TRUNCATE TABLE producto;
# TRUNCATE TABLE pedido;
# TRUNCATE TABLE detalle_pedido;
# -------------------------------------

# REGISTRO PARA ADMINISTRADORES
INSERT INTO admin VALUE ('roxana', 'admin', 'roxana@gmail.com');

# REGISTRO PARA CLIENTES
INSERT INTO cliente VALUE (NULL, 'Jonathan', 'Alisos', 55567, '2018-05-30', 'jonathan@gmail.com', 'admin2');

# REGISTRO PARA CATEGORIAS
INSERT INTO categoria VALUE (NULL, 'Casacas');
INSERT INTO categoria VALUE (NULL, 'Vestidos');
INSERT INTO categoria VALUE (NULL, 'Jeans');

# REGISTRO PARA PRODUCTOS
INSERT INTO producto VALUE (NULL, 'Primer modelo', 1, 200, 'negro', 6, 'Priority', 1);
INSERT INTO producto VALUE (NULL, 'Segundo modelo', 1, 300, 'azulino', 4, 'Zheija', 1);
INSERT INTO producto VALUE (NULL, 'Tercer modelo', 1, 178, 'rosa', 21, 'Priority', 0);
INSERT INTO producto VALUE (NULL, 'Cuarto modelo', 1, 240, 'pristina', 14, 'Zheija', 1);

INSERT INTO producto VALUE (NULL, 'Primer modelo', 2, 200, 'floral', 6, 'Priority', 1);
INSERT INTO producto VALUE (NULL, 'Segundo modelo', 2, 300, 'azulino', 4, 'Zheija', 0);
INSERT INTO producto VALUE (NULL, 'Tercer modelo', 2, 178, 'multicolor', 21, 'Priority', 0);
INSERT INTO producto VALUE (NULL, 'Cuarto modelo', 2, 240, 'fancy', 14, 'Zheija', 0);

INSERT INTO producto VALUE (NULL, 'Primer modelo', 3, 200, 'celeste', 6, 'Priority', 1);
INSERT INTO producto VALUE (NULL, 'Segundo modelo', 3, 300, 'azul', 4, 'Zheija', 0);
INSERT INTO producto VALUE (NULL, 'Tercer modelo', 3, 178, 'rasgado', 21, 'Priority', 1);
INSERT INTO producto VALUE (NULL, 'Cuarto modelo', 3, 240, 'special', 14, 'Zheija', 1);

# REGISTRO PARA PEDIDOS
INSERT INTO pedido VALUE (1, 1, 200, '2018-05-30', 'Lima');

# DETALLE DE LOS PEDIDOS
INSERT INTO detalle_pedido VALUE (1, 1, 200, 2);

# SPECIAL QUERY
SELECT * FROM producto WHERE idcategoria = 3;