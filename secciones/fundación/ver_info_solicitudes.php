<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/base.css">
    <link rel="icon" href="../../img/recursos/logo.ico">
    <title>Administrar Mascotas</title>
    <style>
        table{border-collapse:collapse;}
        td,th{border: 1px black solid;}
    </style>
</head>
<body>

    <div class="row h-100 flex-column-reverse">
    <nav class="col-12 col-md-3-2 sidebar shadow sidebar-hidden pe-0 position-fixed" id="sidebar">
            <div class="side-encabezado text-center">
                <img class="img-fluid d-none d-md-inline"src="../../img/recursos/logo.png">
                <h4 class="pb-2 mt-md-0">ADMINISTRADOR</h4>
            </div>
            <ul class="mt-4">
                <a href="administrar_solicitudes.php">
                    <li class="my-2 seleccionado">   
                        <svg class="icono" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M170.666667 554.666667h256c23.466667 0 42.666667-19.2 42.666666-42.666667V170.666667c0-23.466667-19.2-42.666667-42.666666-42.666667H170.666667c-23.466667 0-42.666667 19.2-42.666667 42.666667v341.333333c0 23.466667 19.2 42.666667 42.666667 42.666667z m0 341.333333h256c23.466667 0 42.666667-19.2 42.666666-42.666667v-170.666666c0-23.466667-19.2-42.666667-42.666666-42.666667H170.666667c-23.466667 0-42.666667 19.2-42.666667 42.666667v170.666666c0 23.466667 19.2 42.666667 42.666667 42.666667z m426.666666 0h256c23.466667 0 42.666667-19.2 42.666667-42.666667v-341.333333c0-23.466667-19.2-42.666667-42.666667-42.666667h-256c-23.466667 0-42.666667 19.2-42.666666 42.666667v341.333333c0 23.466667 19.2 42.666667 42.666666 42.666667zM554.666667 170.666667v170.666666c0 23.466667 19.2 42.666667 42.666666 42.666667h256c23.466667 0 42.666667-19.2 42.666667-42.666667V170.666667c0-23.466667-19.2-42.666667-42.666667-42.666667h-256c-23.466667 0-42.666667 19.2-42.666666 42.666667z"/></svg>
                        <span class="mt-1">Solicitudes</span> 
                    </li>
                </a>
                <a href="administrar_mascotas.php">
                    <li class="my-2">
                        <svg class="icono" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M356.266667 128C406.613333 120.746667 459.946667 175.786667 475.306667 251.733333 490.666667 327.253333 462.933333 394.666667 412.586667 402.346667 362.666667 410.026667 308.906667 354.986667 293.12 279.04 277.333333 203.52 305.92 136.106667 356.266667 128M661.333333 128C712.106667 136.106667 740.266667 203.52 725.333333 279.04 709.12 354.986667 655.786667 410.026667 605.44 402.346667 554.666667 394.666667 526.933333 327.253333 542.72 251.733333 558.08 175.786667 611.413333 120.746667 661.333333 128M128 324.266667C176.64 303.36 242.773333 341.333333 277.333333 407.466667 309.76 474.88 298.666667 545.706667 250.453333 566.613333 202.24 587.52 136.533333 549.973333 102.826667 482.986667 69.12 416 81.066667 344.746667 128 324.266667M896 324.266667C942.933333 344.746667 954.88 416 921.173333 482.986667 887.466667 549.973333 821.76 587.52 773.546667 566.613333 725.333333 545.706667 714.24 474.88 746.666667 407.466667 781.226667 341.333333 847.36 303.36 896 324.266667M824.746667 784.213333C826.453333 824.32 795.733333 868.693333 759.04 885.333333 682.666667 920.32 592.213333 847.786667 507.306667 847.786667 422.4 847.786667 331.093333 923.306667 256 885.333333 213.333333 864.426667 183.893333 808.96 189.44 762.88 197.12 699.306667 273.493333 665.173333 318.72 618.666667 378.88 558.506667 421.546667 445.44 507.306667 445.44 592.64 445.44 637.866667 556.8 695.466667 618.666667 742.826667 670.72 821.76 714.666667 824.746667 784.213333Z"/></svg>   
                        <span class="mt-2">Mascotas</span>
                    </li>
                </a>
                <a href="crear_usuario.php">
                    <li class="my-2">
                        <svg class="icono" viewBox="0 0 1097 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M338.857143 512q-92.571429 2.857143-151.428572 73.142857H110.857143q-46.857143 0-78.857143-23.142857T0 494.285714q0-201.714286 70.857143-201.714285 3.428571 0 24.857143 12t55.714285 24.285714T219.428571 341.142857q38.285714 0 76-13.142857-2.857143 21.142857-2.857142 37.714286 0 79.428571 46.285714 146.285714z m612 364q0 68.571429-41.714286 108.285714t-110.857143 39.714286H298.857143q-69.142857 0-110.857143-39.714286T146.285714 876q0-30.285714 2-59.142857t8-62.285714T171.428571 692.571429t24.571429-55.714286 35.428571-46.285714 48.857143-30.571429T344 548.571429q5.714286 0 24.571429 12.285714t41.714285 27.428571 61.142857 27.428572 77.142858 12.285714 77.142857-12.285714 61.142857-27.428572 41.714286-27.428571 24.571428-12.285714q34.857143 0 63.714286 11.428571t48.857143 30.571429 35.428571 46.285714 24.571429 55.714286 15.142857 62 8 62.285714 2 59.142857zM365.714286 146.285714q0 60.571429-42.857143 103.428572t-103.428572 42.857143-103.428571-42.857143-42.857143-103.428572 42.857143-103.428571T219.428571 0t103.428572 42.857143 42.857143 103.428571z m402.285714 219.428572q0 90.857143-64.285714 155.142857T548.571429 585.142857 393.428571 520.857143 329.142857 365.714286t64.285714-155.142857T548.571429 146.285714t155.142857 64.285715T768 365.714286z m329.142857 128.571428q0 44.571429-32 67.714286t-78.857143 23.142857h-76.571428q-58.857143-70.285714-151.428572-73.142857 46.285714-66.857143 46.285715-146.285714 0-16.571429-2.857143-37.714286 37.714286 13.142857 76 13.142857 33.714286 0 68-12.285714t55.714285-24.285714 24.857143-12q70.857143 0 70.857143 201.714285z m-73.142857-348q0 60.571429-42.857143 103.428572t-103.428571 42.857143-103.428572-42.857143-42.857143-103.428572 42.857143-103.428571 103.428572-42.857143 103.428571 42.857143 42.857143 103.428571z"/></svg>
                        <span class="mt-1">Usuarios</span> 
                    </li>
                </a>
                <a class="salir w-100 pe-3" href="#">
                    <li class=" my-2">
                        <svg class="icono2" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M548.43904 684.246016c7.16288 0.013312 14.034944-2.83648 19.08736-7.914496L727.109632 512.553984 567.513088 348.763136c-10.724352-10.368-27.833344-10.07104-38.187008 0.659456-10.118144 10.473472-10.118144 27.067392 0 37.540864L654.942208 512.579584 529.32608 638.210048c-10.514432 10.578944-10.461184 27.6736 0.131072 38.201344C534.510592 681.422848 541.329408 684.232704 548.43904 684.246016zM106.651648 538.724352l563.526656 0c14.917632 0 27.014144-12.1088 27.014144-27.021312 0-14.918656-12.096512-27.015168-27.014144-27.015168l-563.526656 0c-14.931968 0-27.015168 12.096512-27.015168 27.015168C79.63648 526.614528 91.71968 538.724352 106.651648 538.724352zM350.04928 890.208256 350.04928 646.255616l54.385664-0.078848 0 211.371008c0 18.044928 14.642176 32.672768 32.687104 32.672768l420.168704 0c18.044928 0 32.673792-14.62784 32.673792-32.672768l0 0-0.831488-690.812928c0-18.044928-14.628864-32.673792-32.673792-32.673792-0.013312 0-0.013312 0-0.013312 0L437.13536 134.061056c-18.044928 0-32.687104 14.628864-32.687104 32.673792l0 210.190336-54.398976 0 0-243.134464c0-29.837312 24.192-54.030336 54.030336-54.030336l486.267904 0c29.838336 0 54.030336 24.192 54.030336 54.030336l0 756.416512c0 29.838336-24.192 54.030336-54.030336 54.030336L404.078592 944.237568C374.24128 944.237568 350.04928 920.045568 350.04928 890.208256z"  /></svg>
                        <span class="mt-1 cerrar-sesion">Cerrar Sesión</span>
                    </li>
                </a>
            </ul>
        </nav>
        <main class="col-md-9 h-100 p-0 contenido"> 
                <div class="contenido-admin-encabezado d-flex align-items-center justify-content-center justify-content-md-start">
                    <img class="adm-menu-sm d-md-none position-absolute start-0" onclick="abrirMenu()" id="menu" src="../../img/recursos/menu-icon.png" width="25%">
                    <svg class="icono" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M356.266667 128C406.613333 120.746667 459.946667 175.786667 475.306667 251.733333 490.666667 327.253333 462.933333 394.666667 412.586667 402.346667 362.666667 410.026667 308.906667 354.986667 293.12 279.04 277.333333 203.52 305.92 136.106667 356.266667 128M661.333333 128C712.106667 136.106667 740.266667 203.52 725.333333 279.04 709.12 354.986667 655.786667 410.026667 605.44 402.346667 554.666667 394.666667 526.933333 327.253333 542.72 251.733333 558.08 175.786667 611.413333 120.746667 661.333333 128M128 324.266667C176.64 303.36 242.773333 341.333333 277.333333 407.466667 309.76 474.88 298.666667 545.706667 250.453333 566.613333 202.24 587.52 136.533333 549.973333 102.826667 482.986667 69.12 416 81.066667 344.746667 128 324.266667M896 324.266667C942.933333 344.746667 954.88 416 921.173333 482.986667 887.466667 549.973333 821.76 587.52 773.546667 566.613333 725.333333 545.706667 714.24 474.88 746.666667 407.466667 781.226667 341.333333 847.36 303.36 896 324.266667M824.746667 784.213333C826.453333 824.32 795.733333 868.693333 759.04 885.333333 682.666667 920.32 592.213333 847.786667 507.306667 847.786667 422.4 847.786667 331.093333 923.306667 256 885.333333 213.333333 864.426667 183.893333 808.96 189.44 762.88 197.12 699.306667 273.493333 665.173333 318.72 618.666667 378.88 558.506667 421.546667 445.44 507.306667 445.44 592.64 445.44 637.866667 556.8 695.466667 618.666667 742.826667 670.72 821.76 714.666667 824.746667 784.213333Z"/></svg>
                    <h1>Mascotas</h1>
                </div>
                    
                <h1>Información de solicitud</h1>
            <form>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre">
                <label for="cedula">Cédula</label>
                <input type="text" id="cedula">
                <br>
                <label for="correo">Correo electronico</label>
                <input type="email" id="correo">
                <label for="telefono">Celular</label>
                <input type="text" id="telefono">
                <br>
                Motivo para adoptar
                <br>
                <textarea name="motivo" id="motivo" cols="20" rows="5" style="resize: none;"></textarea>
                <br>
                Ubicación
                <br>
                <textarea name="ubicacion" id="ubicacion" cols="20" rows="5" style="resize: none;"></textarea>
                <br>
                <label for="lugar">Lugar</label>
                <input type="text" id="lugar" value="casa">
                <button>Ver cédula</button>
                <br>
                <button>Actualizar</button>
                <button>Cerrar</button>
            </form>

        </main>
    </div>
</body>
</html>
<script src="../../js/base_admin.js"></script>