<?php

include('conexion.php');

try{

    $nombre=$_REQUEST["q"];
    $cedula=$_REQUEST["p"];
    $contrasena=$_REQUEST["n"];
    $sql="call Insertar_Usuario(?,?,?)";
    $consulta=$conn->prepare($sql);
    $consulta->bindParam(1,$nombre,PDO::PARAM_STR);
    $consulta->bindParam(2,$contrasena,PDO::PARAM_STR);
    $consulta->bindParam(3,$cedula,PDO::PARAM_STR);
    $consulta->execute();
    echo($consulta->rowcount());


}

catch(PDOException $e)
{
    if($e->errorInfo[1] == 1062){
        echo 1062;
    }
//echo($e->getMessage());

}
?>