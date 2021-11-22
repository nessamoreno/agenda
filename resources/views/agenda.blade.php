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

<h2>Agenda</h2>

<table>
<tr>
    <th><a href="guardar">Crear</a></th>

  </tr>
  <tr>
    <th>Nombre</th>
    <th>Teléfono</th>
    <th>Dirección</th>
    <th>Acciones</th>

  </tr>
    @foreach ($contactos as $contacto)
    <tr>
        <td>{{ $contacto->nombre }}</td>
        <td>{{ $contacto->telefono }}</td>
        <td>{{ $contacto->direccion }}</td>
        <td><a href="{{ route('guardar') . '?id=5'  }}">Editar</a> -  <a href="">Eliminar</a></td>

    </tr>
  
    @endforeach

</table>

</body>
</html>

