<?php
include("conexion.php");

$opc=$_REQUEST["q"];
$ID=$_REQUEST["p"];

$sql="call Actualizar_Soli(?,?)";
$consulta=$conn->prepare($sql);
$consulta->bindParam(1,$opc,PDO::PARAM_INT);
$consulta->bindParam(2,$ID,PDO::PARAM_INT);
$consulta->execute();

?>