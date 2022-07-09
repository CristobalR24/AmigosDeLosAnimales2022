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
        echo "<tr class='row ' id='tabla'>";
        echo "<td class='col-sm-1 my-auto'>".$ID."</td>";
        echo "<td class='col-sm-2 my-auto'><strong>".$mascota."</strong></td>";
        echo "<td class='col-sm-2 my-auto'>".$Tipo."</td>";
        echo "<td class='col-sm-2 my-auto'>".$nombre_adop."</td>";
        echo "<td class='col-sm-2 my-auto'>".$fecha."</td>";
        echo "<td class='col-sm-1 g-0 my-auto'>".$tipo_m."</td>";
        echo "<td class='col-sm-2 ps-4 my-auto pb-2'><button class='btn-ver-info' id='in' onclick='info()'>Ver información</button></td>";
            // <td><button class='btn btn-primary' id="in" onclick="test()">Ver información</button></td>
        echo "</tr>";

        }
    }
}

?>
