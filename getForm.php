<?php
 $conect = mysqli_connect('localhost','root','','cendi') or die("Error de conectividad con el servidor");
 
 $cicloEscolar = $_POST["cicloEscolar"];
 $cendi = $_POST["cendi"];
 $boleta = $_POST["boleta"];
 $apePaterno = $_POST["apePaterno"];
 $apeMaterno = $_POST["apeMaterno"];
 $nombre = $_POST["nombre"];
 $fechaNacimiento = $_POST["fechaNacimiento"];
 $curp = $_POST["curp"];

 $apePaternoDH = $_POST["apePaternoDH"];
 $apeMaternoDH = $_POST["apeMaternoDH"];
 $nombreDH = $_POST["nombreDH"];
 $curpDH = $_POST["curpDH"];
 $calle = $_POST["calle"];
 $noInt = $_POST["noInt"];
 $noExt = $_POST["noExt"];
 $colonia = $_POST["colonia"];
 $municipio = $_POST["municipio"];
 $entidad = $_POST["entidad"];
 $cp = $_POST["cp"];
 $telFijo = $_POST["telFijo"];
 $telCel = $_POST["telCel"];
 $correo = $_POST["correo"];
 $ocupacion = $_POST["ocupacion"];
 $puesto = $_POST["puesto"];
 $sueldo = $_POST["sueldo"];
 $noEmp = $_POST["noEmp"];
 $adscripcion = $_POST["adscripcion"];
 $horario = $_POST["horario"];
 $ext = $_POST["ext"];

 $apePaternoCon = $_POST["apePaternoCon"];
 $apeMaternoCon = $_POST["apeMaternoCon"];
 $nombreCon = $_POST["nombreCon"];
 $curpCon = $_POST["curpCon"];
 $trabajoCon= $_POST["trabajoCon"];
 $telTrabajoCon = $_POST["telTrabajoCon"];
 $calleTraCon = $_POST["calleTraCon"];
 $noIntCon = $_POST["noIntCon"];
 $noExtCon = $_POST["noExtCon"];
 $coloniaCon = $_POST["coloniaCon"];
 $municipioCon = $_POST["municipioCon"];
 $extensionCon = $_POST["extensionCon"];

 $conyuge = $_POST["conyuge"];

 echo "
 We have your data, $nombreDH $apePaternoDH $apeMaternoDH
 el valor del conyuge es, $conyuge
 ";


 $sql = "INSERT INTO nino (apPatN,apMat,nombreN,fnac,curpN,imagen,folio,nemp,grupo,
  cendi,ciclo) VALUES ('$apePaterno','$apeMaterno','$nombre','$fechaNacimiento',
  '$curp','','$boleta','$noEmp','','$cendi','$cicloEscolar')";

 $sql2 = "INSERT INTO derechohabiente (apPat,apMat,nombre,calle,numExt,numInt,colonia,municipio, 
 entidadfed,cp,telfijo,telcel,correo,ocupacion,curp,plaza,sueldo,nemp,adscripcion,horario,
  extension,contrasena,imagen) VALUES ('$apePaternoDH','$apeMaternoDH','$nombreDH','$calle',
  '$noExt','$noInt','$colonia','$municipio','$entidad','$cp','$telFijo','$telCel','$correo',
  '$ocupacion','$curpDH','$puesto','$sueldo','$noEmp','$adscripcion','$horario','$ext','',
  '')";
  $resultado2 = mysqli_query($conect,$sql2) or die("Error base de datos");
  $resultado = mysqli_query($conect,$sql) or die("Error base de datos");

  if($conyuge == "si"){
    $sql3 = "INSERT INTO conyuge(apPat,apMat,nombre,trabajocon,callecon, 
    numExtcon,numIntcon,coloniacon,municipiocon,teltrab,ext,curpcon,nemp) 
    VALUES ('$apePaternoCon','$apeMaternoCon','$nombreCon','$trabajoCon','$calleTraCon','$noExtCon',
    '$noIntCon','$coloniaCon','$municipioCon','$telTrabajoCon','$extensionCon','$curpCon',
    '$noEmp')";
    $resultado3 = mysqli_query($conect,$sql3) or die ("Error base de datos");
 }else{ 
     $sql4 = "INSERT INTO conyuge(apPat,apMat,nombre,trabajocon,callecon, 
    numExtcon,numIntcon,coloniacon,municipiocon,teltrab,ext,curpcon,nemp) 
    VALUES ('','','','','','','','','','','','','$noEmp')";
    $resultado4 = mysqli_query($conect,$sql4) or die ("Error base de datos"); return null;
 }


mysqli_close($conect);


 ?>
