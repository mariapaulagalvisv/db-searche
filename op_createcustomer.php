<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("php/conexion.php");
$sql="INSERT INTO clientes (Cli_Cedula,Cli_PrimerNombre,Cli_SegundoNombre,Cli_PrimerApellido,Cli_SegundoApellido,Cli_Email,Cli_Telefono,Cli_Celular,Cli_Sexo,Cli_FechaNacimiento,Cli_Direccion,Cli_Barrio,Ciu_Codigo) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
if(!($sentencia = $mysqli->prepare($sql))){
	echo "Error en el SQL:".$mysql->errno."-". $mysqli->error;
}
$sentencia->bind_param("isssssiissssi",$_POST["cedula"],$_POST["primernombre"],$_POST["segundonombre"],$_POST["primerapellido"],$_POST["segundoapellido"],$_POST["email"],$_POST["telefono"],$_POST["celular"],$_POST["sexo"],$_POST["fechanacimiento"],$_POST["direccion"],$_POST["barrio"],$_POST["codigo"]);
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