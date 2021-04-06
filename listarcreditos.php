<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listar Créditos</title>
<style type="text/css">
label{
	display: inline-block;
	width: 100px;
}
body{
	font-family: "Comic Sans MS", cursive;
}
#button { font-family: "Comic Sans MS", cursive;
}
fieldset {
	font-family: "Comic Sans MS", cursive;
}
input{background-color: inherit;
}
body { background-image: url(imagen/fondo.jpg);
}
</style>
</head>

<body>
<fieldset><legend>Listar Créditos</legend>
<?php
include ("php/conexion.php");
$sql="SELECT Cre_Codigo,Cli_Cedula,Cre_ValorBien,Cre_CuotaInicial,Cre_Cuotas,Cre_TipoCredito,Cre_TasaInt,Cre_TasaMora,Cre_TasaSeguro,Cre_TasaFianza,Cre_TasaDescuento,Cre_TasaGastosAdmin,Cre_TasaSVida,Cre_ValorCuota,Cre_FechaCredito,Cre_FechaDesembolso,Cre_HoraDesembolso,Cre_ValorDoc,Cre_FechaCuota1,Cre_ValorSegVida,Cre_ValorFianza,Cre_Activo,Cre_Observaciones,Cre_Vendedor,Cre_FechaSolicitud,Cre_Estado,Cre_Prefijo,Cre_Numeracion,Cre_Pignorado,Cre_Aseguradora,Cre_Refinanciacion,Cre_ValorEstudio,Cre_Clasificacion FROM creditos ORDER BY Cre_Codigo";
	if(!($sentencia = $mysqli->prepare($sql))){
		echo "Error en el SQL:".$mysql->errno."-". $mysqli->error;
	}
$sentencia->execute();
?>
<table border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">Código</th>
    <th scope="col">Cedula</th>
    <th scope="col">Valor Bien</th>
    <th scope="col">Cuota Inicial</th>
    <th scope="col">Cuotas</th>
    <th scope="col">Tipo Crédito</th>
    <th scope="col">Tasa Int</th>
    <th scope="col">Tasa Mora</th>
    <th scope="col">Tasa Seguro</th>
    <th scope="col">Tasa Fianza</th>
    <th scope="col">Tasa Descuento</th>
    <th scope="col">Tasa Gastos Admin</th>
    <th scope="col">Tasa S Vida</th>
    <th scope="col">Valor Cuota</th>
    <th scope="col">Fecha Crédito</th>
    <th scope="col">Fecha Desembolso</th>
    <th scope="col">Hora Desembolso</th>
    <th scope="col">Valor Doc</th>
    <th scope="col">Fecha Cuota 1</th>
    <th scope="col">Valor Seg Vida</th>
    <th scope="col">Valor Fianza</th>
    <th scope="col">Activo</th>
    <th scope="col">Observaciones</th>
    <th scope="col">Vendedor</th>
    <th scope="col">Fecha Solicitud</th>
    <th scope="col">Estado</th>
    <th scope="col">Prefijo</th>
    <th scope="col">Numeración</th>
    <th scope="col">Pignorado</th>
    <th scope="col">Aseguradora</th>
    <th scope="col">Refinanciación</th>
    <th scope="col">Valor Estudio</th>
    <th scope="col">Clasificación</th>
  </tr>
<?php
$codigo="";
$cedula="";
$valorbien="";
$cuotainicial="";
$cuotas="";
$tipocredito="";
$tasaint="";
$tasamora="";
$tasaseguro="";
$tasafianza="";
$tasadescuento="";
$tasagastosadmin="";
$tasasvida="";
$valorcuota="";
$fechacredito="";
$fechadesembolso="";
$horadesembolso="";
$valordoc="";
$fechacuota1="";
$valorsegvida="";
$valorfianza="";
$activo="";
$observaciones="";
$vendedor="";
$fechasolicitud="";
$estado="";
$prefijo="";
$numeracion="";
$pignorado="";
$aseguradora="";
$refinanciacion="";
$valorestudio="";
$clasificacion="";
$sentencia->bind_result($codigo,$cedula,$valorbien,$cuotainicial,$cuotas,$tipocredito,$tasaint,$tasamora,$tasaseguro,$tasafianza,$tasadescuento,$tasagastosadmin,$tasasvida,$valorcuota,$fechacredito,$fechadesembolso,$horadesembolso,$valordoc,$fechacuota1,$valorsegvida,$valorfianza,$activo,$observaciones,$vendedor,$fechasolicitud,$estado,$prefijo,$numeracion,$pignorado,$aseguradora,$refinanciacion,$valorestudio,$clasificacion);
while ($sentencia-> fetch ()){
?>
  <tr>
    <td><?php echo $codigo; ?></td>
    <td><?php echo $cedula; ?></td>
    <td><?php echo $valorbien; ?></td>
    <td><?php echo $cuotainicial; ?></td>
    <td><?php echo $cuotas; ?></td>
    <td><?php echo $tipocredito; ?></td>
    <td><?php echo $tasaint; ?></td>
    <td><?php echo $tasamora; ?></td>
    <td><?php echo $tasaseguro; ?></td>
    <td><?php echo $tasafianza; ?></td>
    <td><?php echo $tasadescuento; ?></td>
    <td><?php echo $tasagastosadmin; ?></td>
    <td><?php echo $tasasvida; ?></td>
    <td><?php echo $valorcuota; ?></td>
    <td><?php echo $fechacredito; ?></td>
    <td><?php echo $fechadesembolso; ?></td>
    <td><?php echo $horadesembolso; ?></td>
    <td><?php echo $valordoc; ?></td>
    <td><?php echo $fechacuota1; ?></td>
    <td><?php echo $valorsegvida; ?></td>
    <td><?php echo $valorfianza; ?></td>
    <td><?php echo $activo; ?></td>
    <td><?php echo $observaciones; ?></td>
    <td><?php echo $vendedor; ?></td>
    <td><?php echo $fechasolicitud; ?></td>
    <td><?php echo $estado; ?></td>
    <td><?php echo $prefijo; ?></td>
    <td><?php echo $numeracion; ?></td>
    <td><?php echo $pignorado; ?></td>
    <td><?php echo $aseguradora; ?></td>
    <td><?php echo $refinanciacion; ?></td>
    <td><?php echo $valorestudio; ?></td>
    <td><?php echo $clasificacion; ?></td> 
  </tr>
<?php
}
?>
</table>
<ul>
<ol><input type="button" value="Crear Créditos" onClick="window.location.href='crearcreditos.php' "></ol>
<ol><input type="button" value="Volver Menú" onClick="window.location.href='menu.php' "></ol>
</ul>
</fieldset>
</body>
</html>