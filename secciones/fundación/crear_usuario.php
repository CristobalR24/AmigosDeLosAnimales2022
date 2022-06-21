<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
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
            <label for="nombre">Nombre</label>
            <input id="nombre" type="text">
            <br>
            <label for="cedula">Cédula</label>
            <input id="cedula" type="text">
            <br>
            <label for="password">Contraseña</label>
            <input id="password" type="password">
            <br>
            <label for="re_password">Repetir Contraseña</label>
            <input id="re_password" type="password">
            <br>
            <button>Crear usuario</button>
        </form>
    </main>
</body>
</html>