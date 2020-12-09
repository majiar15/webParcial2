<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/login-registrar.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="title"><img src="/public/assets/img/logo.PNG" alt=""></div>
        <ul>
            <li><a href="./index.html">Inicio</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="./subastas.html">Subastas</a></li>
            <li><a href="./ventas.html">Ventas</a></li>
            <li><a href="./login.html">Login</a></li>
            <li>
                <a href="./Registrar.html">Registrar</a>
                <div class="Linea"></div>
            </li>
            <li><a href="./carrito.html"><i class="fas fa-shopping-bag"></i></a></li>
        </ul>

    </header>
    <div class="container">
        <h1>Crea una cuenta</h1>
        <div class="formulario">
            <form action="#">
                <label for="nombre">Nombre:</label><br>
                <input type="text" name="nombre" id="nombreUsuario"><br>
                <label for="nombre">Apellidos:</label><br>
                <input type="text" name="apellido" id="apellido"><br>
                <label for="nombre">Cedula:</label><br>
                <input type="text" name="cc" id="cc"><br>
                <label for="email">Correo electronico:</label><br>
                <input type="email" name="email" id="email"><br>
                <label for="pass">Contraseña:</label><br>
                <input type="password" name="pass" id="pass"><br>
                <label for="nombre">Direccion</label><br>
                <input type="text" name="direccion" id="direccion"><br>
                <label for="nombre">Pais:</label><br>
                <input type="text" name="pais" id="pais"><br>
                <label for="pass">Ciudad:</label><br>
                <input type="password" name="ciudad" id="ciudad"><br>


                <button>Registrarse</button>
            </form>
        </div>

    </div>
</body>

</html>