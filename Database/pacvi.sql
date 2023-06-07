-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2022 a las 04:12:47
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pacvi`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ACTUALIZAR_DATOS_PERSONA_ADMIN` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(30), IN `P_NOMBRE` VARCHAR(30), IN `P_APPELLIDOS` VARCHAR(60), IN `P_FECH_NACIMIENTO` DATE, IN `P_GENERO` VARCHAR(2), IN `P_TIPO_PERSONA` CHAR(2), IN `P_EMAIL` VARCHAR(50), IN `P_TELEFONO` INT(30))  BEGIN
        DECLARE PERSONA_CEDULA VARCHAR(30);
        SET PERSONA_CEDULA :=P_ID_REGISTRO_PERSONA;
        UPDATE PERSONA SET 
            NOMBRE = P_NOMBRE ,
            APPELLIDOS = P_APPELLIDOS ,
            FECH_NACIMIENTO = P_FECH_NACIMIENTO ,
            GENERO = P_GENERO,
            TIPO_PERSONA = P_TIPO_PERSONA
        WHERE 
            ID_REGISTRO_PERSONA = PERSONA_CEDULA;
        UPDATE PERSONA_CONTACTO SET 
            EMAIL = P_EMAIL ,
            TELEFONO = P_TELEFONO
        WHERE 
            ID_REGISTRO_PERSONA = PERSONA_CEDULA;
        COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ACTUALIZAR_DATOS_PERSONA_USU` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(30), IN `P_NOMBRE` VARCHAR(30), IN `P_APPELLIDOS` VARCHAR(60), IN `P_FECH_NACIMIENTO` DATE, IN `P_GENERO` VARCHAR(2), IN `P_EMAIL` VARCHAR(50), IN `P_TELEFONO` INT(30))  BEGIN 
        DECLARE PERSONA_CEDULA VARCHAR(30);
        SET PERSONA_CEDULA :=P_ID_REGISTRO_PERSONA;
        UPDATE PERSONA SET 
            NOMBRE = P_NOMBRE ,
            APPELLIDOS = P_APPELLIDOS ,
            FECH_NACIMIENTO = P_FECH_NACIMIENTO ,
            GENERO = P_GENERO
        WHERE 
            ID_REGISTRO_PERSONA = PERSONA_CEDULA;
        UPDATE PERSONA_CONTACTO SET 
            EMAIL = P_EMAIL ,
            TELEFONO = P_TELEFONO
        WHERE 
            ID_REGISTRO_PERSONA = PERSONA_CEDULA;
        COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ACTUALIZAR_EVENTO` (IN `P_ID_EVENT` INT, IN `P_ENCARGADO` VARCHAR(200), IN `P_NOMBRE_EVENTO` VARCHAR(100), IN `P_HORA_EVENTO` TIME, IN `P_IMG_PATH` VARCHAR(500), IN `P_DSC_EVENTO` VARCHAR(100), IN `P_FECHA_EVENTO` DATE)  BEGIN 
        UPDATE EVENTOS SET 
            ENCARGADO = P_ENCARGADO ,
            NOMBRE_EVENTO = P_NOMBRE_EVENTO ,
            HORA_EVENTO = P_HORA_EVENTO,
            IMG_PATH = P_IMG_PATH ,
            DSC_EVENTO = P_DSC_EVENTO,
            FECHA_EVENTO = P_FECHA_EVENTO
        WHERE 
            ID_EVENT = P_ID_EVENT;
        COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ACTUALIZAR_FOTO` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(30), IN `P_FOTO` VARCHAR(300))  BEGIN 
    DECLARE PERSONA_CEDULA VARCHAR(30);
    SET PERSONA_CEDULA := P_ID_REGISTRO_PERSONA;
    UPDATE PERSONA_CONTACTO SET FOTO_PERFIL = P_FOTO 
        WHERE ID_REGISTRO_PERSONA = PERSONA_CEDULA;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ACTUALIZAR_PASSWORD` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(30), IN `P_PASSWORD_PERSONA` VARCHAR(50))  BEGIN 
    DECLARE PERSONA_CEDULA VARCHAR(30);
    SET PERSONA_CEDULA := P_ID_REGISTRO_PERSONA;
    UPDATE PERSONA SET PASSWORD_PERSONA = HEX(AES_ENCRYPT(P_PASSWORD_PERSONA,"ORPe0YdjNKPOPg7VMKbN"))
        WHERE ID_REGISTRO_PERSONA = PERSONA_CEDULA;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ACTUALIZAR_PERSONA_TESTIMONIO` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(30), IN `P_DSC_TESTIMONIO` VARCHAR(500))  BEGIN 
        UPDATE PERSONA_TESTIMONIOS SET 
            
            DSC_TESTIMONIO= P_DSC_TESTIMONIO
        WHERE 
            ID_REGISTRO_PERSONA = P_ID_REGISTRO_PERSONA;
        COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ASISTIR_EVENTO_USU` (IN `P_ASISTENCIA` INT(1))  BEGIN
            INSERT INTO EVENTOS     
            (
                ASISTENCIA
            )
            VALUES 
            (
                P_ASISTENCIA
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ELIMINAR_CONSULTA` (IN `P_ID_CONSULTAS` INT)  BEGIN
        DELETE FROM CONSULTAS where
            ID_CONSULTAS = P_ID_CONSULTAS;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ELIMINAR_DATOS_PERSONA` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(30))  BEGIN
        DELETE FROM PERSONA WHERE
            ID_REGISTRO_PERSONA = P_ID_REGISTRO_PERSONA;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ELIMINAR_ENVIVO` ()  BEGIN
        DELETE FROM VIDEOS_ENVIVOS WHERE CATEGORIA='E' ;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ELIMINAR_ENVIVO_ID` (IN `P_ID_VIDEO` VARCHAR(30))  BEGIN
        DELETE FROM VIDEOS_ENVIVOS WHERE 
        ID_VIDEO = P_ID_VIDEO AND CATEGORIA='E' ;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ELIMINAR_EVENTO` (IN `P_ID_EVENT` INT)  BEGIN
        DELETE FROM EVENTOS where
            ID_EVENT = P_ID_EVENT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ELIMINAR_IMAGEN` (IN `P_ID_IMAGEN` VARCHAR(30))  BEGIN
        DELETE FROM GALERIA where
            ID_IMAGEN = P_ID_IMAGEN;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ELIMINAR_PERSONA_TESTIMONIO` (IN `P_ID_TESTI` INT)  BEGIN
        DELETE FROM PERSONA_TESTIMONIOS where
            ID_TESTI = P_ID_TESTI;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_ELIMINAR_VIDEO` (IN `P_ID_VIDEO` VARCHAR(30))  BEGIN
        DELETE FROM VIDEOS_ENVIVOS WHERE
            ID_VIDEO = P_ID_VIDEO AND CATEGORIA= 'V';
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_HISTORICO_EVENTO` ()  BEGIN
        SELECT ID_EVENT,IMG_PATH,ENCARGADO,NOMBRE_EVENTO,DSC_EVENTO,FECHA_EVENTO,HORA_EVENTO
        FROM EVENTOS
        ORDER BY  FECHA_EVENTO ASC ,HORA_EVENTO ASC;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_INSERTAR_CONSULTA` (IN `P_NOMBRE` VARCHAR(30), IN `P_APPELLIDOS` VARCHAR(30), IN `P_CORREO` VARCHAR(50), IN `P_ASUNTO` VARCHAR(100), IN `P_DSC_ASUNTO` VARCHAR(500))  BEGIN
            INSERT INTO CONSULTAS     
            (
                ID_CONSULTAS,
                FECHA_ACTUAL,
                NOMBRE,
                APPELLIDOS,
                CORREO,
                ASUNTO,
                DSC_ASUNTO
            )
            VALUES 
            (
                NULL,
                CURRENT_TIMESTAMP(),
                P_NOMBRE,
                P_APPELLIDOS,
                P_CORREO,
                P_ASUNTO,
                P_DSC_ASUNTO
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_INSERTAR_DATOS_PERSONA_ADMIN` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(50), IN `P_NOMBRE` VARCHAR(30), IN `P_APPELLIDOS` VARCHAR(60), IN `P_TIPO_PERSONA` CHAR(2), IN `P_PASSWORD_PERSONA` VARCHAR(50), IN `P_EMAIL` VARCHAR(50))  BEGIN
            INSERT INTO PERSONA     
            (
                ID_REGISTRO_PERSONA,  
                NOMBRE, 
                APPELLIDOS, 
                FECH_NACIMIENTO, 
                GENERO,
                FECHA_REGISTRO,
                TIPO_PERSONA,
                PASSWORD_PERSONA
            )
            VALUES 
            (
                P_ID_REGISTRO_PERSONA, 
                P_NOMBRE, 
                P_APPELLIDOS, 
                NULL, 
                NULL,
                CONVERT(CURRENT_TIMESTAMP,DATE),
                P_TIPO_PERSONA,
                HEX(AES_ENCRYPT(P_PASSWORD_PERSONA,"ORPe0YdjNKPOPg7VMKbN"))
            );
            INSERT INTO PERSONA_CONTACTO
            (
                ID_CONTACTO,
                EMAIL,
                TELEFONO,
                FOTO_PERFIL,
                ID_REGISTRO_PERSONA
            )
            VALUES
            (
                NULL,
                P_EMAIL,
                NULL,
                NULL,
                P_ID_REGISTRO_PERSONA
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_INSERTAR_DATOS_PERSONA_USU` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(50), IN `P_NOMBRE` VARCHAR(30), IN `P_APPELLIDOS` VARCHAR(60), IN `P_PASSWORD_PERSONA` VARCHAR(50), IN `P_EMAIL` VARCHAR(50))  BEGIN
            INSERT INTO PERSONA     
            (
                ID_REGISTRO_PERSONA,  
                NOMBRE, 
                APPELLIDOS, 
                FECH_NACIMIENTO, 
                GENERO,
                FECHA_REGISTRO,
                TIPO_PERSONA,
                PASSWORD_PERSONA
            )
            VALUES 
            (
                P_ID_REGISTRO_PERSONA, 
                P_NOMBRE, 
                P_APPELLIDOS, 
                NULL, 
                NULL,
                CONVERT(CURRENT_TIMESTAMP,DATE),
                0,
                HEX(AES_ENCRYPT(P_PASSWORD_PERSONA,"ORPe0YdjNKPOPg7VMKbN"))
            );
            INSERT INTO PERSONA_CONTACTO
            (
                ID_CONTACTO,
                EMAIL,
                TELEFONO,
                FOTO_PERFIL,
                ID_REGISTRO_PERSONA
            )
            VALUES
            (
                NULL,
                P_EMAIL,
                NULL,
                NULL,
                P_ID_REGISTRO_PERSONA
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_INSERTAR_EVENTO` (IN `P_ENCARGADO` VARCHAR(200), IN `P_NOMBRE_EVENTO` VARCHAR(100), IN `P_HORA_EVENTO` TIME, IN `P_IMG_PATH` VARCHAR(500), IN `P_DSC_EVENTO` VARCHAR(100), IN `P_FECHA_EVENTO` DATE)  BEGIN
            INSERT INTO EVENTOS     
            (
                ID_EVENT,
                ENCARGADO, 
                NOMBRE_EVENTO,
                HORA_EVENTO, 
                IMG_PATH, 
                DSC_EVENTO, 
                FECHA_EVENTO, 
                FECHA_ACTUAL
            )
            VALUES 
            (
                NULL,
                P_ENCARGADO, 
                P_NOMBRE_EVENTO,
                P_HORA_EVENTO, 
                P_IMG_PATH, 
                P_DSC_EVENTO, 
                P_FECHA_EVENTO, 
                current_timestamp()
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_INSERTAR_GALERIA` (IN `P_CODIGO_IMG` VARCHAR(3), IN `P_IMG_PATH` VARCHAR(300))  BEGIN
            INSERT INTO GALERIA
            (
                CODIGO_IMG,
                IMG_PATH,
                FECHA 
            )
            VALUES 
            (
                P_CODIGO_IMG,
                P_IMG_PATH,
                CONVERT(current_timestamp(),DATE)
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_INSERTAR_PERSONA_TESTIMONIO` (IN `P_DSC_TESTIMONIO` VARCHAR(500), IN `P_ID_REGISTRO_PERSONA` VARCHAR(50))  BEGIN
            INSERT INTO PERSONA_TESTIMONIOS
            (
                ID_TESTI, 
                FECHA_ACTUAL, 
                DSC_TESTIMONIO,
                ID_REGISTRO_PERSONA
            )
            VALUES 
            (
                NULL,
                current_timestamp(),
                P_DSC_TESTIMONIO, 
                P_ID_REGISTRO_PERSONA
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_INSERTAR_VIDEO` (IN `P_URL` VARCHAR(300))  BEGIN
            INSERT INTO VIDEOS     
            (
                URL, 
                FECHA 
            )
            VALUES 
            (
                P_URL,
                CONVERT(current_timestamp(),DATE)
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_INSERTAR_VIDEO_ENVIVOS` (IN `P_CATEGORIA` VARCHAR(300), IN `P_URL` VARCHAR(300))  BEGIN
            INSERT INTO VIDEOS_ENVIVOS     
            (
                CATEGORIA,
                URL, 
                FECHA 
            )
            VALUES 
            (
                P_CATEGORIA,
                P_URL,
                CONVERT(current_timestamp(),DATE)
            );
            COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VALI_LOGIN` (IN `P_CORREO` VARCHAR(50), IN `P_PASSWORD` VARCHAR(50))  BEGIN
            SELECT
                TP.ID_TIPO,
                TP.DSC_TIPO AS ROL,
                P.ID_REGISTRO_PERSONA AS CEDULA
            FROM TIPO_PERSONA TP
            INNER JOIN PERSONA P ON (P.TIPO_PERSONA = TP.ID_TIPO)
            INNER JOIN PERSONA_CONTACTO PC ON (PC.ID_REGISTRO_PERSONA = P.ID_REGISTRO_PERSONA)
            WHERE PC.EMAIL =P_CORREO  AND P.PASSWORD_PERSONA = P_PASSWORD;
        END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_CAT_IMG` (IN `P_IMG_PATH` VARCHAR(30))  BEGIN
        DECLARE NOMBRE VARCHAR(30);
        SET NOMBRE := P_IMG_PATH;
        SELECT
                CODIGO_IMG
            FROM GALERIA 
        WHERE IMG_PATH =NOMBRE ;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_CONSULTAS_BY_FECHA` ()  BEGIN
        SELECT FECHA_ACTUAL AS FECHA_DE_RECIBIDO,ID_CONSULTAS, NOMBRE,APPELLIDOS,CORREO,ASUNTO,DSC_ASUNTO
        FROM CONSULTAS 
        ORDER BY FECHA_ACTUAL ASC;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_ENVIVO` ()  BEGIN
      SELECT ID_VIDEO, URL AS DIRECCION_DE_EN_VIVO FROM VIDEOS_ENVIVOS
      WHERE CATEGORIA='E';
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_EVENTO` (IN `P_ID_EVENT` INT)  BEGIN
        SELECT ID_EVENT,NOMBRE_EVENTO,HORA_EVENTO,ENCARGADO, DSC_EVENTO,IMG_PATH,FECHA_EVENTO
        FROM eventos 
        WHERE ID_EVENT = P_ID_EVENT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_EVENTOS` ()  BEGIN
        SELECT IMG_PATH,ENCARGADO,NOMBRE_EVENTO,DSC_EVENTO,FECHA_EVENTO,HORA_EVENTO
        FROM EVENTOS 
        WHERE FECHA_EVENTO >=  FECHA_ACTUAL
        ORDER BY  FECHA_EVENTO, HORA_EVENTO ASC;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_FOTOS` ()  BEGIN
        SELECT
            ID_IMAGEN,
            IMG_PATH 
        FROM GALERIA ;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_FOTOS_CODIGO_J` ()  BEGIN
        SELECT
            ID_IMAGEN,
            CODIGO_IMG AS CATEGORIA,
            IMG_PATH AS DIRECCION_DE_IMAGEN,
            FECHA AS FOTO_SUBIDA
        FROM GALERIA
        WHERE CODIGO_IMG = 'C-J';
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_FOTOS_CODIGO_N` ()  BEGIN
        SELECT
            ID_IMAGEN,
            CODIGO_IMG AS CATEGORIA,
            IMG_PATH AS DIRECCION_DE_IMAGEN,
            FECHA AS FOTO_SUBIDA
        FROM GALERIA
        WHERE CODIGO_IMG = 'C-N';
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_FOTOS_CODIGO_P` ()  BEGIN
        SELECT
            ID_IMAGEN,
            CODIGO_IMG AS CATEGORIA,
            IMG_PATH AS DIRECCION_DE_IMAGEN,
            FECHA AS FOTO_SUBIDA
        FROM GALERIA
        WHERE CODIGO_IMG = 'C-P';
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_FOTOS_FECHA` (IN `P_FECHA` DATE)  BEGIN
        DECLARE BUSQUEDAD_F DATE;
        SET BUSQUEDAD_F :=P_FECHA;
        SELECT
            IMG_PATH AS DIRECCION_DE_IMAGEN,
            FECHA AS FOTO_SUBIDA
        FROM GALERIA
        WHERE FECHA = BUSQUEDAD_F;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_FOTOS_FECHA_DESC` ()  BEGIN
        SELECT
            IMG_PATH AS DIRECCION_DE_IMAGEN
        FROM GALERIA
        ORDER BY FECHA DESC;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_NOMBRE_ROL` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(50))  BEGIN
        SELECT
            TP.DSC_TIPO,
            P.NOMBRE,
            P.APPELLIDOS
        FROM TIPO_PERSONA TP 
        INNER JOIN PERSONA P ON (P.TIPO_PERSONA = TP.ID_TIPO)
        WHERE P.ID_REGISTRO_PERSONA = P_ID_REGISTRO_PERSONA;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_PERFIL` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(50))  BEGIN
        SELECT
            TP.DSC_TIPO,
            P.ID_REGISTRO_PERSONA AS CEDULA,
            PC.FOTO_PERFIL,
            P.NOMBRE,
            P.APPELLIDOS,
            P.FECH_NACIMIENTO,
            P.GENERO,
            PC.EMAIL,
            PC.TELEFONO
        FROM TIPO_PERSONA TP 
        INNER JOIN PERSONA P ON (P.TIPO_PERSONA = TP.ID_TIPO)
        INNER JOIN PERSONA_CONTACTO PC ON (PC.ID_REGISTRO_PERSONA = P.ID_REGISTRO_PERSONA)
        WHERE P.ID_REGISTRO_PERSONA = P_ID_REGISTRO_PERSONA;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_PERSONAS` ()  BEGIN
        SELECT
            TP.DSC_TIPO AS TIPO_DE_PERMISO,
            P.NOMBRE,
            P.APPELLIDOS,
            TIMESTAMPDIFF(YEAR,P.FECH_NACIMIENTO,CURDATE()) AS EDAD,
            P.GENERO,
            PC.EMAIL,
            PC.TELEFONO
        FROM TIPO_PERSONA TP 
        INNER JOIN PERSONA P ON (P.TIPO_PERSONA = TP.ID_TIPO)
        INNER JOIN PERSONA_CONTACTO PC ON (PC.ID_REGISTRO_PERSONA = P.ID_REGISTRO_PERSONA);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_PERSONA_TESTIMONIO` ()  BEGIN
        SELECT
            PT.ID_TESTI,
            PT.DSC_TESTIMONIO, 
            P.NOMBRE,
            P.APPELLIDOS
        FROM PERSONA_TESTIMONIOS PT 
        INNER JOIN PERSONA P ON (P.ID_REGISTRO_PERSONA = PT.ID_REGISTRO_PERSONA);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_PERSONA_TESTIMONIO3` ()  BEGIN
        SELECT
            PT.ID_TESTI,
            PT.DSC_TESTIMONIO, 
            P.NOMBRE,
            P.APPELLIDOS
        FROM PERSONA_TESTIMONIOS PT 
        INNER JOIN PERSONA P ON (P.ID_REGISTRO_PERSONA = PT.ID_REGISTRO_PERSONA) 
        ORDER BY FECHA_ACTUAL DESC LIMIT 3 ;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_PERSONA_TESTIMONIO_BY_FECHA_RECIENTE` ()  BEGIN
        
        SELECT
            PT.DSC_TESTIMONIO, 
            P.NOMBRE,
            P.APPELLIDOS
        FROM PERSONA_TESTIMONIOS PT 
        INNER JOIN PERSONA P ON (P.ID_REGISTRO_PERSONA = PT.ID_REGISTRO_PERSONA)
        ORDER BY PT.FECHA_ACTUAL DESC;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_PERSONA_TESTIMONIO_ORDER_ASC` ()  BEGIN
        SELECT
            PT.DSC_TESTIMONIO, 
            P.NOMBRE,
            P.APPELLIDOS
        FROM PERSONA_TESTIMONIOS PT 
        INNER JOIN PERSONA P ON (P.ID_REGISTRO_PERSONA = PT.ID_REGISTRO_PERSONA)
        ORDER BY P.NOMBRE ASC;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_USUARIO_PERFIL` (IN `P_ID_REGISTRO_PERSONA` VARCHAR(50))  BEGIN
        SELECT
            PC.FOTO_PERFIL,
            P.NOMBRE,
            P.APPELLIDOS,
            P.FECH_NACIMIENTO,
            P.GENERO,
            PC.EMAIL,
            PC.TELEFONO,
            P.PASSWORD_PERSONA
        FROM TIPO_PERSONA TP 
        INNER JOIN PERSONA P ON (P.TIPO_PERSONA = TP.ID_TIPO)
        INNER JOIN PERSONA_CONTACTO PC ON (PC.ID_REGISTRO_PERSONA = P.ID_REGISTRO_PERSONA)
        WHERE P.ID_REGISTRO_PERSONA = P_ID_REGISTRO_PERSONA;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_VIDEO_FECHA_ANTIGUO` ()  BEGIN
        SELECT
            URL AS DIRECCION_DE_VIDEO FROM VIDEOS_ENVIVOS 
            WHERE CATEGORIA ='V' 
            ORDER BY  FECHA ASC ;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_VIDEO_POR_FECHA` (IN `P_FECHA` DATE)  BEGIN
        DECLARE BUSQUEDAD_F DATE;
        SET BUSQUEDAD_F :=P_FECHA;
        SELECT
            URL AS DIRECCION_DE_VIDEO,FECHA AS FECHA_DE_PUBLICACION
        FROM VIDEOS_ENVIVOS
        WHERE FECHA = BUSQUEDAD_F AND CATEGORIA='V';
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `P_VER_VIDEO_RECIENTE` ()  BEGIN
        SELECT
            ID_VIDEO,URL AS DIRECCION_DE_VIDEO FROM VIDEOS_ENVIVOS
        WHERE CATEGORIA ='V' ;
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `ID_CONSULTAS` int(11) NOT NULL,
  `FECHA_ACTUAL` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `NOMBRE` varchar(30) NOT NULL,
  `APPELLIDOS` varchar(30) NOT NULL,
  `CORREO` varchar(50) NOT NULL,
  `ASUNTO` varchar(100) NOT NULL,
  `DSC_ASUNTO` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`ID_CONSULTAS`, `FECHA_ACTUAL`, `NOMBRE`, `APPELLIDOS`, `CORREO`, `ASUNTO`, `DSC_ASUNTO`) VALUES
(1, '2022-07-27 22:36:31', 'Dayron', 'Luna Gamboa', 'ldayron500@gmail.com', '', 'Me podrían brindar información sobre los horarios de las reuniones, saludos.'),
(3, '2022-09-01 05:44:54', 'RANDALL', 'j', 'ran@676gmail.com', 'lo', 'hhhhhhhhhhhhhhhh'),
(4, '2022-09-02 00:24:28', 'Luis', 'Redondo', 'm@gmail.com', 'Matricula', 'hola queria preguntar sobre ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `ID_EVENT` int(11) NOT NULL,
  `ENCARGADO` varchar(200) DEFAULT NULL,
  `NOMBRE_EVENTO` varchar(100) DEFAULT NULL,
  `HORA_EVENTO` time DEFAULT NULL,
  `IMG_PATH` varchar(500) DEFAULT NULL,
  `DSC_EVENTO` varchar(100) DEFAULT NULL,
  `FECHA_EVENTO` date DEFAULT NULL,
  `FECHA_ACTUAL` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`ID_EVENT`, `ENCARGADO`, `NOMBRE_EVENTO`, `HORA_EVENTO`, `IMG_PATH`, `DSC_EVENTO`, `FECHA_EVENTO`, `FECHA_ACTUAL`) VALUES
(6, 'Josue', 'TCU', '19:40:00', 'contact_wallpaper.jpg', 'JJJJJJ', '2022-09-21', '2022-09-01'),
(8, 'M', 'H', '02:16:00', 'contact_wallpaper.jpg', 'jk', '2022-09-10', '2022-09-01'),
(9, 'M', 'M', '02:04:00', 'image_01.jpg', 'jjjjjjjjjjjj', '2022-09-23', '2022-09-01'),
(10, 'K', 'H', '02:04:00', 'image_01.jpg', 'k', '2022-09-17', '2022-09-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `ID_IMAGEN` int(11) NOT NULL,
  `CODIGO_IMG` varchar(3) NOT NULL,
  `IMG_PATH` varchar(100) DEFAULT NULL,
  `FECHA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`ID_IMAGEN`, `CODIGO_IMG`, `IMG_PATH`, `FECHA`) VALUES
(4, 'C-P', 'image_01.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ID_REGISTRO_PERSONA` varchar(50) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `APPELLIDOS` varchar(30) NOT NULL,
  `FECH_NACIMIENTO` date DEFAULT NULL,
  `GENERO` char(2) DEFAULT NULL,
  `PASSWORD_PERSONA` varchar(50) NOT NULL,
  `FECHA_REGISTRO` date DEFAULT NULL,
  `TIPO_PERSONA` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ID_REGISTRO_PERSONA`, `NOMBRE`, `APPELLIDOS`, `FECH_NACIMIENTO`, `GENERO`, `PASSWORD_PERSONA`, `FECHA_REGISTRO`, `TIPO_PERSONA`) VALUES
('302490378', 'Veronica', 'alfaro ', '2002-04-13', 'F', 'B56751FDB9050F6C5A322CBAC44F0436', '2022-09-01', 0),
('30429563', 'WENDY', 'GOMEZ', '2002-05-12', 'F', '75A5313CAE5AF03AA79FFC0B0841A4F5', '2022-09-01', 1),
('305200304', 'Josue', 'Redondo', '1999-09-27', 'M', 'X!J_gD27', '2022-07-28', 0),
('30528745', 'HANNAH', 'GOM', '2002-05-12', 'F', 'HOLA123456', '2022-07-28', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_contacto`
--

CREATE TABLE `persona_contacto` (
  `ID_CONTACTO` int(11) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `TELEFONO` varchar(30) DEFAULT NULL,
  `FOTO_PERFIL` varchar(300) DEFAULT NULL,
  `ID_REGISTRO_PERSONA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona_contacto`
--

INSERT INTO `persona_contacto` (`ID_CONTACTO`, `EMAIL`, `TELEFONO`, `FOTO_PERFIL`, `ID_REGISTRO_PERSONA`) VALUES
(1, 'ran@676gmail.com', '83195333', 'image_03.JPG', '305200304'),
(2, 'm@gmail.com', '86457396', '../FOTO', '30528745'),
(3, 'verogmail.com', '85129636', NULL, '302490378'),
(4, 'wendy@gmail.com', '87459683', NULL, '30429563');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_testimonios`
--

CREATE TABLE `persona_testimonios` (
  `ID_TESTI` int(11) NOT NULL,
  `FECHA_ACTUAL` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DSC_TESTIMONIO` varchar(200) DEFAULT NULL,
  `ID_REGISTRO_PERSONA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona_testimonios`
--

INSERT INTO `persona_testimonios` (`ID_TESTI`, `FECHA_ACTUAL`, `DSC_TESTIMONIO`, `ID_REGISTRO_PERSONA`) VALUES
(4, '2022-09-01 05:39:02', 'Una serie de experiencias reales de la salvación de Dios en desastres y enfermedades. Lee estos testimonios cristianos para fortalecer tu fe y obtener nuevas inspiraciones. Últimas noticias de Dios. ¡', '30528745');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_persona`
--

CREATE TABLE `tipo_persona` (
  `ID_TIPO` int(1) NOT NULL,
  `DSC_TIPO` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_persona`
--

INSERT INTO `tipo_persona` (`ID_TIPO`, `DSC_TIPO`) VALUES
(0, 'USER'),
(1, 'ADMIN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos_envivos`
--

CREATE TABLE `videos_envivos` (
  `ID_VIDEO` int(11) NOT NULL,
  `CATEGORIA` varchar(2) DEFAULT NULL,
  `URL` varchar(300) DEFAULT NULL,
  `FECHA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `videos_envivos`
--

INSERT INTO `videos_envivos` (`ID_VIDEO`, `CATEGORIA`, `URL`, `FECHA`) VALUES
(1, 'V', 'Qee7spAIHuQ', '2022-07-28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`ID_CONSULTAS`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`ID_EVENT`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`ID_IMAGEN`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ID_REGISTRO_PERSONA`),
  ADD KEY `FK1_TIPO_PERSONA` (`TIPO_PERSONA`);

--
-- Indices de la tabla `persona_contacto`
--
ALTER TABLE `persona_contacto`
  ADD PRIMARY KEY (`ID_CONTACTO`),
  ADD KEY `ID_REGISTRO_PERSONA_CFK1` (`ID_REGISTRO_PERSONA`);

--
-- Indices de la tabla `persona_testimonios`
--
ALTER TABLE `persona_testimonios`
  ADD PRIMARY KEY (`ID_TESTI`),
  ADD KEY `ID_REGISTRO_PERSONA_PTFK` (`ID_REGISTRO_PERSONA`);

--
-- Indices de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  ADD PRIMARY KEY (`ID_TIPO`);

--
-- Indices de la tabla `videos_envivos`
--
ALTER TABLE `videos_envivos`
  ADD PRIMARY KEY (`ID_VIDEO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `ID_CONSULTAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `ID_EVENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `ID_IMAGEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `persona_contacto`
--
ALTER TABLE `persona_contacto`
  MODIFY `ID_CONTACTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `persona_testimonios`
--
ALTER TABLE `persona_testimonios`
  MODIFY `ID_TESTI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `videos_envivos`
--
ALTER TABLE `videos_envivos`
  MODIFY `ID_VIDEO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `FK1_TIPO_PERSONA` FOREIGN KEY (`TIPO_PERSONA`) REFERENCES `tipo_persona` (`ID_TIPO`);

--
-- Filtros para la tabla `persona_contacto`
--
ALTER TABLE `persona_contacto`
  ADD CONSTRAINT `ID_REGISTRO_PERSONA_CFK1` FOREIGN KEY (`ID_REGISTRO_PERSONA`) REFERENCES `persona` (`ID_REGISTRO_PERSONA`) ON DELETE CASCADE;

--
-- Filtros para la tabla `persona_testimonios`
--
ALTER TABLE `persona_testimonios`
  ADD CONSTRAINT `ID_REGISTRO_PERSONA_PTFK` FOREIGN KEY (`ID_REGISTRO_PERSONA`) REFERENCES `persona` (`ID_REGISTRO_PERSONA`) ON DELETE CASCADE;

DELIMITER $$
--
-- Eventos
--
CREATE DEFINER=`root`@`localhost` EVENT `BORRAR_EVENTO` ON SCHEDULE EVERY 1 DAY STARTS '2022-08-30 00:00:00' ON COMPLETION PRESERVE ENABLE DO BEGIN
        CALL P_ELIMINAR_ENVIVO();
    END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
