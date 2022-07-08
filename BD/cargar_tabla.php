<?php

class obtener
{
    function solicitudes()
    {include("conexion.php");
        $sql="call Obtener_Solicitud(?)";
        $valor=3;
        $consulta=$conn->prepare($sql);
        $consulta->bindParam(1,$valor,PDO::PARAM_STR);
        $consulta->execute();
        
        while($row=$consulta->fetch())
        {
        $ID=$row["Id_soli"];
        $mascota=$row["Nombre"];
        $Tipo=$row["Tipo_Formulario"];
        $nombre_adop=$row["Nombre_Adop"];
        $fecha=$row["Fecha"];
        $tipo_m=$row["Tipo"];
        echo "<tr>";
        echo "<td>".$ID."</td>";
        echo "<td>".$mascota."</td>";
        echo "<td>".$Tipo."</td>";
        echo "<td>".$nombre_adop."</td>";
        echo "<td>".$fecha."</td>";
        echo "<td>".$tipo_m."</td>";
        echo "<td><button class='btn btn-primary' id='in' onclick='info()'>Ver información</button></td>";
            // <td><button class='btn btn-primary' id="in" onclick="test()">Ver información</button></td>
               

        }
    }
}

?>
