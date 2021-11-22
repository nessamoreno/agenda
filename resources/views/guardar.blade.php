<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Guardar</h2>

<form action="guardar" method="POST">
@csrf

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <label for="telfeono">Teléfono</label>
    <input type="text" name="telefono">
    <label for="direccion">direccion</label>
    <input type="text" name="direccion">
    
    <input type="submit" value="Guradar">


</form>

</body>
</html>

