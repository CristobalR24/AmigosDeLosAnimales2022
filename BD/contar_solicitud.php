<?php

include('conexion.php');

try{

$aprobada;
$pendiente;
$rechazada;

$tipo=$_REQUEST["q"];
//$contrasena=$_REQUEST["p"];
$sql="call Contar_Solicitud(?)";
$consulta=$conn->prepare($sql);
$consulta->bindParam(1,$tipo,PDO::PARAM_INT);
$consulta->execute();

$row=$consulta->fetch();

$resultado=$consulta->rowcount();

if($resultado>0)
{
 //  echo(1);//se consigue informacion en la base de datos

    if($tipo==1)
    {
   $pendiente=$row["Cantidad"];
   echo($pendiente);
    }
     
    else if($tipo==2)
    {
    $aprobada=$row["Cantidad"];
    echo($aprobada);
    }
    
    else if($tipo==3)
    {
    $rechazada=$row["Cantidad"];
    echo($rechazada);
    }
    
    
    
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

