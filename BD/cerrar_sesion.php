<?php
session_start();
session_unset();
var_dump("entro");;
header("location: ../secciones/fundación/inicio_sesion.php");
?>