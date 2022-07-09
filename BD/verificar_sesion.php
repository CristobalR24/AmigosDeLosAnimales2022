<?php
session_start();
if(!isset($_SESSION['sw'])){
    header("location: ../fundación/inicio_sesion.php");}
?>