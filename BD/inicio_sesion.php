<?php

include('conexion.php');

try{


$Nombre;
$Ced;

$cedula=$_REQUEST["q"];
$contrasena=$_REQUEST["p"];
$sql="call Iniciar_Sesion(?,?)";
$consulta=$conn->prepare($sql);
$consulta->bindParam(1,$cedula,PDO::PARAM_STR);
$consulta->bindParam(2,$contrasena,PDO::PARAM_STR);
$consulta->execute();

$row=$consulta->fetch();
//print_r($row);
$resultado=$consulta->rowcount();
$Nombre=$row["Nombre"];
$Ced=$row["Cedula"];

if($resultado>0)
{
   echo(1);//se consigue informacion en la base de datos
       
}
else
{
    echo 2;
}

}

catch(exception $e)
{
echo($e->getMessage());
}
//edge://settings/cookies/detail?site=localhost
?>

