<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listar Clientes</title>
</head>

<body>
<fieldset><legend>Listar Clientes</legend>
<?php
include ("php/conexion.php");
$sql = "SELECT Cli_Cedula,Cli_PrimerNombre,Cli_SegundoNombre,Cli_PrimerApellido,Cli_SegundoApellido,Cli_Email,Cli_Telefono,Cli_Celular,Cli_genero,Cli_FechaNacimiento,Cli_Direccion,Cli_Barrio,Ciu_Codigo FROM clientes ORDER BY Cli_Cedula";
if (!($sentencia = $mysqli->prepare($sql))){
	echo "Error en el SQL:".$mysql->errno."-". $mysqli->error;
}
$sentencia->execute();																
?>
<table border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">Cedula</th>
    <th scope="col">Primer Nombre</th>
    <th scope="col">Segundo Nombre</th>
    <th scope="col">Primer Apellido</th>
    <th scope="col">Segundo Apellido</th>
    <th scope="col">Email</th>
    <th scope="col">Teléfono</th>
    <th scope="col">Celular</th>
    <th scope="col">Genero</th>
    <th scope="col">Fecha de Nacimiento</th>
    <th scope="col">Dirección</th>
    <th scope="col">Barrio</th>
    <th scope="col">Código</th>
  </tr>
<?php
$cedula='';
$primernombre='';
$segundonombre='';
$primerapellido='';
$segundoapellido='';
$email='';
$telefono='';
$celular='';
$genero='';
$fechanacimiento='';
$direccion='';
$barrio='';
$sentencia->bind_result($cedula,$primernombre,$segundonombre,$primerapellido,$segundoapellido,$email,$telefono,$celular,$genero,$fechanacimiento,$direccion,$barrio);
while ($sentencia-> fetch ()){
?>
 <tr>
    <td><?php echo $cedula; ?></td>
    <td><?php echo $primernombre; ?></td>
    <td><?php echo $segundonombre; ?></td>
    <td><?php echo $primerapellido; ?></td>
    <td><?php echo $segundoapellido; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $telefono; ?></td>
    <td><?php echo $celular; ?></td>
    <td><?php echo $genero; ?></td>
    <td><?php echo $fechanacimiento; ?></td>
    <td><?php echo $direccion; ?></td>
    <td><?php echo $barrio; ?></td>
  </tr>
<?php
}
?>
</table>
<ul>
<ol><input type="button" value="Crear Clientes" onClick="window.location.href='crearclientes.php' "></ol>
<ol><input type="button" value="Volver Menú" onClick="window.location.href='menu.php' "></ol>
</ul>
</fieldset>
</body>
</html>