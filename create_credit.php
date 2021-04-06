<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credits</title>
</head>
<body>
    <fieldset><legend>Crear Créditos</legend>
    <form name="form1" method="POST" action="op_createcredit.php">
    <label for="codigo">Código: </label>
    <input type="text" placeholder="Id" id="codigo" required><br>
    <label for="tipo">Tipo Crédito: </label>
    <input type="text" placeholder="Tipo Crédito" id="tipo" require><br>
    <label for="codigo">Fecha Crédito: </label>
    <input type="date" placeholder="Fecha Crédito" id="feccre" required><br>
    <label for="tipo">Fecha Vencimiento: </label>
    <input type="date" placeholder="Fecha Vencimiento" id="fecven" require><br>
    <label for="codigo">Cantidad Días Vencimiento: </label>
    <input type="number" placeholder="Cantidad Días Vencimiento" id="candiven" required><br>
    <label for="codigo">Monto Crédito: </label>
    <input type="number" placeholder="Monto Crédito" id="codigo" required><br>
    <label for="tipo">Valor Neto: </label>
    <input type="number" placeholder="Valor Neto" id="tipo" require><br>
<br>   
<br>
<label for="button"></label>
<input type="submit" name="button" id="button" value="Enviar">
    </form>
        <ul>
            <ol><input type="button" value="Volver Menú" onClick="window.location.href='index.php'"></ol>
        </ul>
    </fieldset>
</body>
</html>