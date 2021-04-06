<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Operación Crear Clientes</title>

<body>
<?php
include("php/conexion.php");
$sql="INSERT INTO crear_clientes INSERT INTO crear_clientes(cli_cedula, cli_primer_nombre, cli_segundo_nombre, cli_primer_apellido, cli_segundo_apellido, cli_email, cli_telefono, cli_celular, cli_genero, cli_fecha_nacimiento, cli_direccion, cli_barrio) VALUES (?,?,?,?,?,?,?,?,?,?,?,?);
if(!($sentencia = $mysqli->prepare($sql))){
	echo "Error en el SQL:".$mysql->errno."-". $mysqli->error;
}
$sentencia->bind_param("ivvvviivvvv",$_POST["cedula"],$_POST["primernombre"],$_POST["segundonombre"],$_POST["primerapellido"],$_POST["segundoapellido"],$_POST["email"],$_POST["telefono"],$_POST["celular"],$_POST["genero"],$_POST["fechanacimiento"],$_POST["direccion"],$_POST["barrio"]);
$sentencia->execute();
$sentencia->close();
?> 
<h2>SE HA CREADO EL REGISTRO</h2>
<ul>
<ol><input type="button" value="Volver Menú" onClick="window.location.href='menu.php' "></ol>
<ol><input type="button" value="Crear Clientes" onClick="window.location.href='crearclientes.php' "></ol>
<ol><input type="button" value="Listar Clientes" onClick="window.location.href='listarclientes.php' "></ol>
</ul>
</body>
</html>