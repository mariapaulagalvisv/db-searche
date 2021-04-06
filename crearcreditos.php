<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Créditos</title>
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
button { background-color:#666;
}
</style>
</head>

<body>
<fieldset><legend>Crear Créditos</legend>
<form name="form1" method="post" action="op_crearcreditos.php">
  <label for="codigo">Código:</label>
  <input type="text" name="codigo" id="codigo" required>
  <br>
    <label for="cedula">Cedula:</label>
  <input type="text" name="cedula" id="cedula" required>
  <br>

  <label for="valorbien">Valor Bien:</label>
  <input type="text" name="valorbien" id="valorbien">
  <br>
  <label for="cuotainicial">Cuota Inicial:</label>
  <input type="number" name="cuotainicial" id="cuotainicial">
  <br>
  <label for="cuotas">Cuotas:</label>
  <input type="number" name="cuotas" id="cuotas">
  <br>
  <label for="tipocredito">Tipo Crédito:</label>
  <input type="text" name="tipocredito" id="tipocredito" maxlength="30">
  <br>
  <label for="tasaint">Tasa Int:</label>
  <input type="number" name="tasaint" id="tasaint">
  <br>
  <label for="tasamora">Tasa Mora:</label>
  <input type="number" name="tasamora" id="tasamora">
  <br>
  <label for="tasaseguro">Tasa Seguro:</label>
  <input type="number" name="tasaseguro" id="tasaseguro">
  <br>
  <label for="tasafianza">Tasa Fianza:</label>
  <input type="number" name="tasafianza" id="tasafianza">
  <br>
  <label for="tasadescuento">Tasa Descuento:</label>
  <input type="number" name="tasadescuento" id="tasadescuento">
  <br>
  <label for="tasagastosadmin">Tasa Gastos Admin:</label>
  <input type="number" name="tasagastosadmin" id="tasagastosadmin">
  <br>
  <label for="tasasvida">Tasa S Vida:</label>
  <input type="number" name="tasasvida" id="tasasvida">
  <br>
  <label for="valorcuota">Valor Cuota:</label>
  <input type="number" name="valorcuota" id="valorcuota">
  <br>
  <label for="fechacredito">Fecha Crédito:</label>
  <input type="date" name="fechacredito" id="fechacredito">
  <br>
  <label for="fechadesembolso">Fecha Desembolso:</label>
  <input type="date" name="fechadesembolso" id="fechadesembolso">
  <br>
  <label for="horadesembolsado">Hora Desembolsado:</label>
  <input type="time" name="horadesembolsado" id="horadesembolsado">
  <br>
  <label for="valordoc">Valor Doc:</label>
  <input type="number" name="valordoc" id="valordoc">
  <br>
  <label for="fechacuota1">Fecha Cuota 1:</label>
  <input type="date" name="fechacuota1" id="fechacuota1">
  <br>
  <label for="valorfianza">Valor Fianza:</label>
  <input type="number" name="valorfianza" id="valorfianza">
  <br>
  <label for="valorsegvida">Valor Seg Vida:</label>
  <input type="number" name="valorsegvida" id="valorsegvida">
  <br>
  <label for="activo">Activo:</label>
  <input type="number" name="activo" id="activo">
  <br>
  <label for="observaciones">Observaciones:</label>
  <textarea name="observaciones" id="observaciones"></textarea>
  <br>
  <label for="vendedor">Vendedor:</label>
  <input type="text" name="vendedor" id="vendedor" maxlength="90">
  <br>
  <label for="fechasolicitud">Fecha Solicitud:</label>
  <input type="date" name="fechasolicitud" id="fechasolicitud" required>
  <br>
  <label for="estado">Estado:</label>
  <input type="text" name="estado" id="estado" maxlength="45" required>
  <br>
  <label for="prefijo">Prefijo:</label>
  <input type="text" name="prefijo" id="prefijo" maxlength="3">
  <br>
<label for="numeracion">Numeración:</label>
  <input type="number" name="numeracion" id="numeracion">
  <br>
  <label for="pignorado">Pignorado:</label>
  <input type="text" name="pignorado" id="pignorado" maxlength="50">
  <br>
  <label for="aseguradora">Aseguradora:</label>
  <input type="text" name="aseguradora" id="aseguradora">
  <br>
  <label for="refinanciacion">Refinanciación:</label>
  <input type="number" name="refinanciacion" id="refinanciacion">
  <br>
  <label for="valorestudio">Valor Estudio:</label>
  <input type="number" name="valorestudio" id="valorestudio">
  <br>
  <label for="clasificacion">Clasificación:</label>
  <input type="text" name="clasificacion" id="clasificacion" maxlength="25">
  <br>
<label for="button"></label>
  <input type="submit" name="button" id="button" value="Enviar">
</form>
<ul>
<ol><input type="button" value="Volver Menú" onClick="window.location.href='menu.php' "></ol>
<ol><input type="button" value="Listar Créditos" onClick="window.location.href='listarcreditos.php' "></ol>
</ul>
</fieldset>
</body>
</html>