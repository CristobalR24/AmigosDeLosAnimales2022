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
        <h1>Usuarios</h1>
        <a href="crear_usuario.php">Crear usuario</a>
        <a href="lista_usuario.php">Lista de usuarios</a>

        <form>
            <input id="busqueda" type="search">
            <br>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Cédula</th>
                    <th>Contraseña</th>
                </tr>
                <tr>
                    <td>Nombre Apellido</td>
                    <td>0-000-000</td>
                    <td>0-000-000</td>
                    <td><button>Editar</button></td>
                    <td><button>Eliminar</button></td>
                    
                </tr>
                <tr>
                    <td>Nombre Apellido</td>
                    <td>0-000-000</td>
                    <td>123124</td>
                    <td><button>Editar</button></td>
                    <td><button>Eliminar</button></td>
                </tr>
                <tr>
                    <td>Nombre Apellido</td>
                    <td>0-000-000</td>
                    <td>123124</td>
                    <td><button>Editar</button></td>
                    <td><button>Eliminar</button></td>
                </tr>

            </table>
        </form>
    </main>
</body>
</html>