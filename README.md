# todoEnUno_M2
Php-Html-phpMyAdmin.

# Descripción.

Muestra una codificación de distintos componentes de una aplicación web, con dos diferentes tecnologías de lenguaje 
contenidas en una arquitectura de tres capas: 

i) **Capa modelo**, gestiona la comunicación de datos a través de la interfaz  **$conexion** 
	 desde un sistema de administración de bases de datos DBMS (del inglés Data Base Management System) con el administrador
	 `phpMyAdmin` en el lado del servidor Apache.		
```
$conexion=new mysqli($localhost, $my_user, $my_password, $my_db);
```
ii) **Capa controlador**, retorna en el espacio de memoria $result, una serialización de objetos tipo registro-atributos desde 
la base de datos, señalada por la petición **$query**, misma que es desrealizada y convertida en un arreglo asociativo **$renglones[]**.	
```	
$result=$conexion->query($query);
while($row=$result->fetch_assoc())
	{
		$renglones[]=$row;
	}
```
iii) **Capa vista**, recupera los elementos del arreglo asociativo, y los renderiza en elementos de lista **<li>** del `HTML` 
(Lenguaje de marcas de hipertexto, del inglés, HyperText Markup Language) y mostrados en la interfaz usuario-máquina en el 
lado del navegador del cliente.    
		
```
foreach ($renglones as $atributo)
		{
			echo "<li><h4>SUBMODULO: " .$atributo["submodulo"]."</h4></li>";
			echo "<li><h4>ACTIVIDAD CLAVE: " .$atributo["actividadClave"]."</h4></li>";
			echo "<li><h4>DESARROLLO DE LA COMPETENCIA: " .$atributo["desarrolloCompetencia"]."</h4></li>";
			echo "<li><h4>PRODUCTO: " .$atributo["producto"]."</h4></li>";
			echo "<li><h4>DESEMPEÑO: " .$atributo["desempeno"]."</h4></li>";
			echo "░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░";
		}
```
# Dependencia.
Una _dependencia_ significa enlaces abstractos entre objetos, implica una dependecnia de los servicios prestados por un objeto e información
que puede ser interpretada de varias maneras [1]. 
El siguiente diagrama muestra una _dependencia mínima_ entre entidades de lenguaje.

```bash
php-phpMyAdmin
$conexion ← m2						<- base de datos relacional
	     ├─═─credenciales_submodulo_uno.php 	<- tabla con registro-atributos
	     └─═─credenciales_submodulo_dos.php 	<- tabla con registro-atributos
	        ↖ ═ selector de dependencia.
```
```
credenciales.php

$query = "SELECT * FROM submodulo_uno";		//define tipo de consulta
//$query = "SELECT * FROM submodulo_dos";	
  ↖ //selector de dependencia.
```
</br>


#   Referencias.
</br>
[1] Dependencias.</br>
Engineering Systems Design Rhapsody.</br>
Disponible en: https://www.ibm.com/docs/es/engineering-lifecycle-management-suite/design-rhapsody/9.0.1?topic=objects-dependencies </br>
Consultado: 06julio24.</br>
