<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Clientes</title>
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
<fieldset><legend>Crear Clientes</legend>
<form name="form1" method="POST" action="op_crearclientes.php">
    <label for="cedula" >Cédula:</label>
    <input type="text" name="cedula" id="cedula" maxlength="10" required>
    <br>
    <label for="primernombre">Primer Nombre:</label>
    <input type="text" name="primernombre" id="primernombre" maxlength="45" required>
    <br>
    <label for="segundonombre">Segundo Nombre:</label>
    <input type="text" name="segundonombre" id="segundonombre" maxlength="45" required>
    <br>
    <label for="primerapellido">Primer Apellido:</label>
    <input type="text" name="primerapellido" id="primerapellido" maxlength="45" required>
    <br>
    <label for="segundoapellido">Segundo Apellido:</label>
    <input type="text" name="segundoapellido" id="segundoapellido" maxlength="45" required>
    <br>
	<label for="email"> Email: </label>
    <input type="email" name="email" id="email">
    <br>
	<label for="telefono">Teléfono:</label>
    <input type="number" name="telefono" id="telefono" maxlength="50">
    <br>
    <label for="celular">Celular:</label>
    <input type="number" name="celular" id="celular" maxlength="45">
    <br>
    <label for="select">Sexo:</label>
    <select type="text" name="genero" id="genero" maxlength="45">
    <option>Masculino</option>
    <option>Femenino</option>
    </select>
<br>
	<label for="fecha">Fecha de Nacimiento:</label>
    <input type="date" name="fecha" id="fecha">
    <br>
    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" maxlength="45">
    <br>
    <label for="barrio">Barrio:</label>
    <input type="text" name="barrio" id="barrio" maxlength="45">
    <br>
    <label for="barrio">Código:</label>
    <input type="text" name="codigo" id="codigo" maxlength="45" required>
    <br><br>
    
    <label for="button"></label>
  	<input type="submit" name="button" id="button" value="Enviar">
  </form>
  <ul>
  <ol><input type="button" value="Volver Menú" onClick="window.location.href='menu.php' "></ol>
  <ol><input type="button" value="Listar Clientes" onClick="window.location.href='listarclientes.php' "></ol>
  </ul>
  </fieldset>
</body>
</html>