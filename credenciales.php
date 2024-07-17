<?php
/*define credenciales de acceso a bd para la tabla: m2
define una consulta a base de datos
muestra como gestionar el flujo de datos.  
Permite renderizar los atributos de una de dos tablas  
	m2
	├credenciales_submodulo_uno.php
	└credenciales_submodulo_dos.php

versión 1.0.0 estado funcional 02jun24.
versión 0.1.1 creación del repositorio remoto.
versión 0.1.0 creación del repositorio local.
Glosario
query	consulta.
SELECT * FROM submodulo_dos sentencia tipo SQL para seleccionar todo(*) los registros-atributos de una tabla
*/
$localhost="localhost";						//define servidor
$my_user="root";							//define usuario
$my_password="";							//define contraseña
$my_db="m2";								//define nombre de base de datos
$query = "SELECT * FROM submodulo_uno";		//define tipo de consulta
//$query = "SELECT * FROM submodulo_dos";	