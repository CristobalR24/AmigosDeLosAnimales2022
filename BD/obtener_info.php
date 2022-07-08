<?php

include("conexion.php");

try{

$id=$_REQUEST["q"];
$sql="call obtener_info(?)";
$consulta=$conn->prepare($sql);
$consulta->bindParam(1,$id,PDO::PARAM_INT);
//$consulta->bindParam(2,$contrasena,PDO::PARAM_STR);
$consulta->execute();

while($row=$consulta->fetch())
{
//print_r($row);
$Nombre=$row["Nombre_Adop"];
$Cedula=$row["Cedula"];
$Correo=$row["Correo"];
$Celular=$row["Celular"];
$Motivo=$row["Motivo"];
$Ubicacion=$row["Ubicacion"];
$Hogar=$row["Tipo_Hogar"];


}
$r=preg_split('/\s+/', $Nombre, -1, PREG_SPLIT_NO_EMPTY);
$can=count($r);
echo"<div id='elemento'>";
echo("<label id='eti'>Nombre</label>");
echo"<br>";
echo("<input id='i' readonly value='".$nom=implode( ' ', $r )."'>");
echo("</div>");

echo("<div id='elemento'>");
echo("<label id='eti'>Cedula</label>");
echo"<br>";
echo("<input id='i' readonly value=".$Cedula.">");
echo("</div>");

echo"<br>";

echo"<div id='elemento'>";
echo("<label id='eti'>Correo</label>");
echo"<br>";
echo("<input id='i' readonly value=".$Correo.">");
echo("</div>");

echo"<div id='elemento'>";
echo("<label id='eti'>Celular</label>");
echo"<br>";
echo("<input id='i' readonly value=".$Celular.">");
echo("</div>");

echo"<br>";
echo"<div id='elemento'>";
echo("<label id='eti'>Motivo</label>");
echo"<br>";
echo("<textarea id='motivo' rows='3' cols='50' readonly >".$Motivo."</textarea>");
echo("</div>");

echo"<br>";

echo"<div id='elemento'>";
echo("<label id='eti'>Ubicacion</label>");
echo"<br>";
echo("<textarea id='motivo' rows='2' cols='30' readonly >".$Ubicacion."</textarea>");
echo("</div>");

echo"<br>";
echo("<div id='elemento'>");
echo("<label id='eti'>Hogar</label>");
echo"<br>";
echo("<input id='i' readonly value=".$Hogar.">");
echo("</div>");

echo("<div id='elemento'>");
echo("<label id='eti'>Estado</label>");
echo"<br>";
echo("<select name='opciones' id='opc'>");
echo("<option value=0>Elija una opcion</option>");
echo("<option value=2>Aprobar</option>");
echo("<option value=3>Rechazar</option>");
echo("</select>");
echo("</div>");

echo"<br>";
echo "<div id='botones'>";
echo"<a id='error'></a>";
echo"<br>";

echo"<button class='btn btn-primary' onclick='actualizar()'> Actualizar </button>";
echo"<button class='btn btn-primary' onclick='cerrar()'> Cerrar </button>";

echo("</div>");

}

catch(exception $ex){

}


?>