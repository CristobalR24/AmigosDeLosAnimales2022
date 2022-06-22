<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
    <style>
        table{border-collapse:collapse;}
        td,th{border: 1px black solid;}
    </style>
</head>
<body>
    <aside>
        <img src="../../img/recursos/logo.png" width="200rem">
        <h2>ADMINISTRADOR</h2>
        <nav>
            <ul>
                <li><a href="administrar_solicitudes.php">Solicitudes</a></li>
                <li>Mascotas</li>
                <li>Usuarios</li>
                <li>Cerrar_sesion</li>
            </ul>
        </nav>
    </aside>
    <main>
        <h1>Solicitudes</h1>
        <a href="#">En espera</a>
        <a href="#">Aprobadas</a>
        <a href="#">Rechazadas</a>

        <form>
            <input id="busqueda" type="search">
            <button>Perro</button>
            <button>Gato</button>
            <button>Adopción</button>
            <button>Hogar temporal</button>
            <br>
            <table>
                <tr>
                    <th>Mascota solicitada</th>
                    <th>Tipo de solicitud</th>
                    <th>Solicitado por</th>
                    <th>Fecha</th>
                </tr>
                <tr>
                    <td>Negrito</td>
                    <td>Adopción</td>
                    <td>Nombre Apellido</td>
                    <td>11-10-2022</td>
                    <td><button>Ver información</button></td>
                </tr>
                <tr>
                    <td>Negrito</td>
                    <td>Adopción</td>
                    <td>Nombre Apellido</td>
                    <td>11-10-2022</td>
                    <td><button>Ver información</button></td>
                </tr>
                <tr>
                    <td>Negrito</td>
                    <td>Adopción</td>
                    <td>Nombre Apellido</td>
                    <td>11-10-2022</td>
                    <td><button>Ver información</button></td>
                </tr>
            </table>
        </form>
    </main>
</body>
</html>