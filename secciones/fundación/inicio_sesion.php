<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/recursos/logo.ico">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <title>Iniciar sesión</title>


    <script type="text/javascript" src="../../js/inicio_sesion.js"></script>
</head>

<body>    


<?php
include ("..//..//BD//conexion.php");

?>

    <div class="container bg-light contenedor-form " style="height:fit-content;">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center">
                <img class="img-fluid w-25 img-logo" src="../../img/recursos/logo.png">
               <!-- <form onsubmit="prueba()"> -->
                    <h1 class="titulo-login">INICIO DE SESIÓN</h1>
                    <div class="grupo-icono mt-5">
                        <input class="entrada mt-1" id="cedula" type="text" maxlength="15" placeholder="Cédula"/>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <br>
                    
                    <div class="grupo-icono">
                        <input class="entrada mt-1" id="contrasena" type="password" maxlength="16"  placeholder="Contraseña"/>
                        <i class="fa-solid fa-key"></i>
                    </div>
                    <br>
                    <button class="btn-entrar shadow" onclick="sesion()">ENTRAR</button>
                    <br>
                    <a id="falla"></a>
                    <br>
                    
                    <br>
                    <div class="mb-4 mb-md-0" id="linea">
                        <a href="../../index.html" id="volver">Volver a la página principal</a>
                    </div>
               <!-- </form> -->
            </div>
            <div class="col-md-6 col-sm-0 bg-dark p-0 m-0">
                <img class="img-fluid img-lado d-none d-md-block" src="../../img/recursos/negrito-01-13.png">
            </div>
        </div>
    </div>
   
</body>
</html>
<script>
    let linea = document.getElementById("linea");
    let volver = document.getElementById("volver");

    volver.addEventListener("mouseover", function( event ) {
        linea.style.borderTopColor="#1177bf";
        linea.style.transition="0.5s";
    });
    volver.addEventListener("mouseout", function( event ) {
        linea.style.borderTopColor="#D9D9D9";
    });
</script>



