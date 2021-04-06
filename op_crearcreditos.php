<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Operación Crear Créditos</title>
</head>
<body>
<?php
include("php/conexion.php");
$sql="INSERT INTO credito (id,tipo_credito,fecha_credito,fecha_vencimiento,cant_dias_venci,monto_credito,valor_neto) VALUES (?,?,?,?,?,?,?)";
if(!($sentencia = $mysqli->prepare($sql))){
	echo "Error en el SQL:".$mysql->errno."-". $mysqli->error;
}
$sentencia->bind_param("isddiii",$_POST["codigo"],$_POST["cedula"],$_POST["tipocredito"],$_POST["fechacredito"],$_POST["fechavencimiento"],$_POST["cantdiasvenci"],$_POST["montocredito"],$_POST["valorneto"]);
$sentencia->execute();
$sentencia->close();
?>
<h2>SE HA CREADO EL REGISTRO</h2>
<ul>
<ol><input type="button" value="Volver Menú" onClick="window.location.href='menu.php' "></ol>
<ol><input type="button" value="Crear Créditos" onClick="window.location.href='crearcreditos.php' "></ol>
<ol><input type="button" value="Listar Créditos" onClick="window.location.href='listarcreditos.php' "></ol>
</ul>
</body>
</html>