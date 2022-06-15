<?php

  $user=$_POST['user'];
  $ctr=$_POST['ctr'];

  session_start();

  $_SESSION['user'] = $user;
  include("./db.php");

  $ob_admin = "SELECT * FROM administradores WHERE usera = '$user' and ctr = '$ctr'";
  $resultadm = mysqli_query($conn,$ob_admin);

  $filas = mysqli_num_rows($resultadm);
  if($filas){
    header("location: crud.php");
  }else{
    ?>
    <?php
      include("admins.html");
    ?>
      <h1>ERROR EN LA AUTENTIFICACION DE CREDENCIALES</h1>
    <?php
  }
  mysqli_free_result($resultadm);
  mysqli_close($conn);
?>


