<?php
//---------MÉTODOS PARA MOSTRAR TEXTO EN PANTALLA--------
//Cell(ancho, alto, texto, bordes, ?, alineación, rellenar, link) celdas
//Write(alto,texto,link) linea

//------------------OUTPUT-----------------------------
//Output(destino[I,D,F,S],nombre_archivo,utf8) el nombre del archivo es utf8
//-I: Muestra archivo en el navegador siempre y cuando haya un pluggin
//-D: descarga el pdf
//-F: Guarda el archivo dentro del servidpr
//-S: Lo devuelve como cadena file_get_contents(filename)

//----------------IMÁGENES-------------------------------------
//$fpdf->Image(ruta, piscionX,posicionY,alto,ancho,tipo,link);

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




require('fpdf/fpdf/fpdf.php');



class pdf extends FPDF
{
    public function Header() 
    {
    
        //$this->Image('fpdf/Images/logo-cendi.png',190,5, 20,20,'png');
        //$this->Image('Images/edu-img.png',0,5, 70,20,'png');
        $this->SetY(15);
    }
     function Footer()
    {
        $this->SetY(-15);
        $this->SetX(10);
        $this->SetFont('Arial','',12);
        $this->Write(5,$this->PageNo());
       
    } 
}


$fpdf = new PDF();
$fpdf->AddPage('portrait', 'a4');//orientacion, tamaño
$fpdf->Ln();
$fpdf->SetFont('Arial','B',14);
$fpdf->SetY(25);
$fpdf->SetX(160);
$fpdf->Cell(30, 40, 'texto', 1, 0, 'C', false);
$fpdf->SetFont('Arial','B',14);
$fpdf->SetY(25);
$fpdf->SetX(12);
$fpdf->Cell(180,5, utf8_decode('FICHA DE INSCRIPCION-REINCRIPCIÓN'),0,0,'C',false);//ancho,alto en milimetros
$fpdf->SetFillColor(207, 237, 240);
//$fpdf->SetFont('Arial','B',14);
//$fpdf->Cell(180,5, utf8_decode('FICHA DE INSCRIPCION-REINCRIPCIÓN'),0,0,'C',false);//ancho,alto en milimetros
$fpdf->Ln(10);
$fpdf->SetFont('Arial','',12);
$fpdf->Write(5,'Ciclo Escolar:');
$fpdf->SetFont('Arial','B',12);
$fpdf->Write(5,'2022-2023');
$fpdf->Ln(7);
$fpdf->SetFont('Arial','',12);
$fpdf->Write(5,'CENDI:');
$fpdf->SetFont('Arial','B',12);
$fpdf->Write(5,utf8_decode('CENDI Amalia Solórzano de Cárdenas'));
$fpdf->Ln(12);
$fpdf->SetFont('Arial','',11);
$fpdf->Cell(15,5,utf8_decode('Folio:'),1,0,'C',false);
$fpdf->Cell(15,5,utf8_decode(''),1,0,'C',true);
$fpdf->Ln();
$fpdf->Cell(15,5,utf8_decode('Grupo:'),1,0,'C',false);
$fpdf->Cell(15,5,utf8_decode(''),1,0,'C',true);
$fpdf->Ln(10);
//--------------------DATOS DEL NIÑO----------------
$fpdf->SetFont('Arial','B',13);
$fpdf->Cell(30,5, utf8_decode('DATOS DEL NIÑO O DE LA NIÑA:'));//ancho,alto en milimetros
$fpdf->Ln();
$fpdf->SetFont('Arial','',10);

$fpdf->Cell(60,5,utf8_decode($apePaterno),1,0,'C',true);
$fpdf->Cell(60,5,utf8_decode($apeMaterno),1,0,'C',true);
$fpdf->Cell(60,5,utf8_decode($nombre),1,0,'C',true);
$fpdf->Ln();
$fpdf->Cell(60,5,utf8_decode('Primer Apellido'),1,0,'C',false);
$fpdf->Cell(60,5,utf8_decode('Segundo Apellido'),1,0,'C',false);
$fpdf->Cell(60,5,utf8_decode('Nombre(s)'),1,0,'C',false);
$fpdf->Ln();

$fpdf->Cell(35,5,'Fecha de Nacimiento:',1,0,'C',false);
$fpdf->Cell(10,5,utf8_decode('Día'),1,0,'L',false);
$fpdf->Cell(15,5,utf8_decode(''),1,0,'C',true);
$fpdf->Cell(10,5,utf8_decode('Mes'),1,0,'L',false);
$fpdf->Cell(20,5,utf8_decode(''),1,0,'C',true);
$fpdf->Cell(10,5,utf8_decode('Año'),1,0,'L',false);
$fpdf->Cell(20,5,utf8_decode(''),1,0,'C',true);
$fpdf->Cell(11,5,utf8_decode('Edad:'),1,0,'L',false);
$fpdf->Cell(11,5,utf8_decode('Años'),1,0,'C',false);
$fpdf->Cell(14,5,utf8_decode(''),1,0,'C',true);
$fpdf->Cell(11,5,utf8_decode('Mes'),1,0,'C',false);
$fpdf->Cell(13,5,utf8_decode(''),1,0,'C',true);
$fpdf->Ln();
$fpdf->Cell(15,5,'CURP:',1,0,'L',false);
$fpdf->Cell(165,5,utf8_decode($curp),1,0,'C',true);
$fpdf->Ln(15);
//--------------------DATOS DEL DERECHOHABIENTE---------------
$fpdf->SetFont('Arial','B',13);
$fpdf->Cell(30,5, utf8_decode('DATOS DEL O LA DERECHOHABIENTE:'));//ancho,alto en milimetros
$fpdf->Ln();
$fpdf->SetFont('Arial','',10);
$fpdf->Cell(60,5,utf8_decode($apeMaternoDH),1,0,'C',true);
$fpdf->Cell(60,5,utf8_decode($apeMaternoDH),1,0,'C',true);
$fpdf->Cell(60,5,utf8_decode($nombreDH),1,0,'C',true);
$fpdf->Ln();
$fpdf->Cell(60,5,utf8_decode('Primer Apellido'),1,0,'C',false);
$fpdf->Cell(60,5,utf8_decode('Segundo Apellido'),1,0,'C',false);
$fpdf->Cell(60,5,utf8_decode('Nombre(s)'),1,0,'C',false);
$fpdf->Ln();
$fpdf->Cell(180,5,utf8_decode('Domicilio Particular:'),1,0,'C',false);
$fpdf->Ln();
$fpdf->Cell(60,5,utf8_decode($calle),1,0,'C',true);
$fpdf->Cell(30,5,utf8_decode($noExt),1,0,'C',true);
$fpdf->Cell(30,5,utf8_decode($noInt),1,0,'C',true);
$fpdf->Cell(60,5,utf8_decode($colonia),1,0,'C',true);
$fpdf->Ln();
$fpdf->Cell(60,5,utf8_decode('Calle'),1,0,'C',false);
$fpdf->Cell(30,5,utf8_decode('No. Ext'),1,0,'C',false);
$fpdf->Cell(30,5,utf8_decode('No. Int'),1,0,'C',false);
$fpdf->Cell(60,5,utf8_decode('Colonia'),1,0,'C',false);
$fpdf->Ln();
$fpdf->Cell(45,5,utf8_decode($municipio),1,0,'C',true);
$fpdf->Cell(45,5,utf8_decode($entidad),1,0,'C',true);
$fpdf->Cell(30,5,utf8_decode($cp),1,0,'C',true);
$fpdf->Cell(30,5,utf8_decode($telFijo),1,0,'C',true);
$fpdf->Cell(30,5,utf8_decode($telCel),1,0,'C',true);
$fpdf->Ln();
$fpdf->Cell(45,5,utf8_decode('Alcaldía o Municipio'),1,0,'C',false);
$fpdf->Cell(45,5,utf8_decode('Entidad Federativa'),1,0,'C',false);
$fpdf->Cell(30,5,utf8_decode('C.P'),1,0,'C',false);
$fpdf->Cell(30,5,utf8_decode('Teléfono fijo'),1,0,'C',false);
$fpdf->Cell(30,5,utf8_decode('Teléfono celular'),1,0,'C',false);
$fpdf->Ln();
$fpdf->Cell(60,5,utf8_decode($correo),1,0,'C',true);
$fpdf->Cell(60,5,utf8_decode($ocupacion),1,0,'C',true);
$fpdf->Cell(60,5,utf8_decode($curpDH),1,0,'C',true);
$fpdf->Ln();
$fpdf->Cell(60,5,utf8_decode('Correo Electrónico'),1,0,'C',false);
$fpdf->Cell(60,5,utf8_decode('Ocupación'),1,0,'C',false);
$fpdf->Cell(60,5,utf8_decode('CURP'),1,0,'C',false);
$fpdf->Ln();
$fpdf->Cell(80,5,utf8_decode($puesto),1,0,'C',true);
$fpdf->Cell(50,5,utf8_decode($sueldo),1,0,'C',true);
$fpdf->Cell(50,5,utf8_decode($noEmp),1,0,'C',true);
$fpdf->Ln();
$fpdf->Cell(80,5,utf8_decode('Nombre de Plaza/Puesto'),1,0,'C',false);
$fpdf->Cell(50,5,utf8_decode('Sueldo Mensual'),1,0,'C',false);
$fpdf->Cell(50,5,utf8_decode('No. Empleado'),1,0,'C',false);
$fpdf->Ln();
$fpdf->Cell(80,5,utf8_decode($adscripcion),1,0,'C',true);
$fpdf->Cell(50,5,utf8_decode($horario),1,0,'C',true);
$fpdf->Cell(50,5,utf8_decode($ext),1,0,'C',true);
$fpdf->Ln();
$fpdf->Cell(80,5,utf8_decode('Adscripción'),1,0,'C',false);
$fpdf->Cell(50,5,utf8_decode('Horario de Trabajo'),1,0,'C',false);
$fpdf->Cell(50,5,utf8_decode('Extensión'),1,0,'C',false);

$fpdf->Ln(15);
//--------------------DATOS DEL CÓNYUGUE---------------
$fpdf->SetFont('Arial','B',13);
$fpdf->Cell(30,5, utf8_decode('DATOS DEL CÓNYUGUE(PADRE O MADRE):'));//ancho,alto en milimetros
$fpdf->Ln();
$fpdf->SetFont('Arial','',10);
$fpdf->Cell(60,5,utf8_decode($apePaternoCon),1,0,'C',true);
$fpdf->Cell(60,5,utf8_decode($apeMaternoCon),1,0,'C',true);
$fpdf->Cell(60,5,utf8_decode($nombreCon),1,0,'C',true);
$fpdf->Ln();
$fpdf->Cell(60,5,utf8_decode('Primer Apellido'),1,0,'C',false);
$fpdf->Cell(60,5,utf8_decode('Segundo Apellido'),1,0,'C',false);
$fpdf->Cell(60,5,utf8_decode('Nombre(s)'),1,0,'C',false);
$fpdf->Ln();
$fpdf->Cell(180,5,utf8_decode('Domicilio del Trabajo:'),1,0,'C',false);
$fpdf->Ln();
$fpdf->Cell(60,5,utf8_decode($calleTraCon),1,0,'C',true);
$fpdf->Cell(30,5,utf8_decode($noExtCon),1,0,'C',true);
$fpdf->Cell(30,5,utf8_decode($noIntCon),1,0,'C',true);
$fpdf->Cell(60,5,utf8_decode($coloniaCon),1,0,'C',true);
$fpdf->Ln();
$fpdf->Cell(60,5,utf8_decode('Calle'),1,0,'C',false);
$fpdf->Cell(30,5,utf8_decode('No. Ext'),1,0,'C',false);
$fpdf->Cell(30,5,utf8_decode('No. Int'),1,0,'C',false);
$fpdf->Cell(60,5,utf8_decode('Colonia'),1,0,'C',false);
$fpdf->Ln();
$fpdf->Cell(45,5,utf8_decode($municipioCon),1,0,'C',true);
$fpdf->Cell(45,5,utf8_decode(''),1,0,'C',true);
$fpdf->Cell(30,5,utf8_decode(''),1,0,'C',true);
$fpdf->Cell(30,5,utf8_decode(''),1,0,'C',true);
$fpdf->Cell(30,5,utf8_decode(''),1,0,'C',true);
$fpdf->Ln();
$fpdf->Cell(45,5,utf8_decode('Alcaldía o Municipio'),1,0,'C',false);
$fpdf->Cell(45,5,utf8_decode('Entidad Federativa'),1,0,'C',false);
$fpdf->Cell(30,5,utf8_decode('C.P'),1,0,'C',false);
$fpdf->Cell(30,5,utf8_decode('Teléfono fijo'),1,0,'C',false);
$fpdf->Cell(30,5,utf8_decode('Teléfono celular'),1,0,'C',false);
$fpdf->Ln();
$fpdf->Cell(60,5,utf8_decode(''),1,0,'C',true);
$fpdf->Cell(60,5,utf8_decode(''),1,0,'C',true);
$fpdf->Cell(60,5,utf8_decode(''),1,0,'C',true);
$fpdf->Ln();
$fpdf->Cell(60,5,utf8_decode('Lugar de Trabajo'),1,0,'C',false);
$fpdf->Cell(60,5,utf8_decode('Teléfono del Trabajo'),1,0,'C',false);
$fpdf->Cell(60,5,utf8_decode('Extensión'),1,0,'C',false);
$fpdf->Ln();
$fpdf->Cell(180,5,utf8_decode(''),1,0,'C',true);
$fpdf->Ln();
$fpdf->Cell(180,5,utf8_decode('CURP'),1,0,'C',false);

$fpdf->AddPage('portrait', 'a4');//orientacion, tamaño
$fpdf->SetY(25);
$fpdf->SetFont('Arial','B',12);
$fpdf->Write(5,utf8_decode('Fotografías del o de la derechohabiente, cónyugue y persona autorizadapara recoger al pequeño'));

$fpdf->SetY(38);
$fpdf->SetX(15);
$fpdf->Cell(30, 40, 'texto', 1, 0, 'C', false);
$fpdf->SetY(80);
$fpdf->SetX(10);
$fpdf->Write(5,utf8_decode('DERECHOHABIENTE'));

$fpdf->SetY(38);
$fpdf->SetX(90);
$fpdf->Cell(30, 40, 'texto', 1, 0, 'C', false);
$fpdf->SetY(80);
$fpdf->SetX(93);
$fpdf->Write(5,utf8_decode('CÓNYUGE'));

$fpdf->SetY(38);
$fpdf->SetX(165);
$fpdf->Cell(30, 40, 'texto', 1, 0, 'C', false);
$fpdf->SetY(80);
$fpdf->SetX(165);
$fpdf->Write(5,utf8_decode('P.AUTORIZADA'));
//Cuando hagamos la funcion de enviar header("location: ./index.php")


$fpdf->OutPut('F',"./{$noEmp}.pdf");//Llama por defecto a Close para poder cerrar el pdf