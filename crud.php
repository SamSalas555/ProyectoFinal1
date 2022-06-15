
<?php
    include("db.php");
    if(isset($_SESSION['user'])){
       ?>
        <h1>Sesion Iniciada</h1>
       <?php
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Inicio Administrador</title>
  <!-- Compiled and minified Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <!-- Font Awesome  -->
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  <link rel="icon" href="Images/favicon.ico"/>
 </head>

<body>

<body>
<div class="container" style="padding:20px">
    <h1>Registros Actuales</h1>
<button class="buttonwaves-effect waves-light btn">Crear</button>
<table class="table table-striped table-hover">
  <tr>
    <th>Numero de trabajador</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Folio</th>
    <th>Curp</th>
    <th>Acciones</th>
  </tr>
  <tr>
    <td>2020300826</td>
    <td>Samuel</td>
    <td>Salas</td>
    <td>001</td>
    <td>SAJS010203SDASDWSDA</td>
    <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
    </td>
  </tr>
</table>

</div>

 <!-- jQuery cdn link-->
 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- Compiled and minified JavaScript Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="behaviour.js"></script>

  <!-- Modal -->

</body>

</html>



