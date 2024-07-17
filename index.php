<?php
/*index.php todoEnUno_m2
Descripción.
	Muestra la convivencia de tres capas de una arquitectura codificadas con dos diferentes tecnologías de lenguaje
	
	versión 1.0.0 estado funcional 02jun24.
	versión 0.1.1 creación del repositorio remoto.
	versión 0.1.0 creación del repositorio local.
*/
require_once("./credenciales.php");
$renglones=array();

/*capa de modelo  
retorna un objeto tipo mysqli para gestionar la 
conexión entre base de datos: m2 y tabla: submodulo_1|2 
la capa modelo gestiona la comunicación con la base de datos.
*/
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conexion=new mysqli($localhost, $my_user, $my_password, $my_db);

/*capa de controlador retorna serialización de una 
consulta con registro-atributos 
*/
$conexion->query("set names 'utf8'");
$result=$conexion->query($query);
while($row=$result->fetch_assoc())
	{
		$renglones[]=$row;
	}
?>

<!--capa de vista renderiza una deserelización d una consulta-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<title>MÓDULO II</title>
</head>
<body>
	<ul>
	<h2>MÓDULO II.  
	DESARROLLA SOFTWARE CON HERRAMIENTAS ORIENTADAS A LA PRODUCTIVIDAD.</h2>
	<?php
		foreach ($renglones as $atributo)
		{
			echo "<li><h4>SUBMODULO: " .$atributo["submodulo"]."</h4></li>";
			echo "<li><h4>ACTIVIDAD CLAVE: " .$atributo["actividadClave"]."</h4></li>";
			echo "<li><h4>DESARROLLO DE LA COMPETENCIA: " .$atributo["desarrolloCompetencia"]."</h4></li>";
			echo "<li><h4>PRODUCTO: " .$atributo["producto"]."</h4></li>";
			echo "<li><h4>DESEMPEÑO: " .$atributo["desempeno"]."</h4></li>";
			echo "░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░";
		}
	?>	
	</ul>
</body>
</html>
	