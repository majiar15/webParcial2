<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/login-registrar.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="title"><img src="/public/assets/img/logo.PNG" alt=""></div>
        <ul>
            <li><a href="./index.php">Inicio</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="./subastas.php">Subastas</a></li>
            <li><a href="./ventas.php">Ventas</a></li>
            <li>
                <a href="./login.php">Login</a>
                <div class="Linea"></div>
            </li>
            <li><a href="./Registrar.php">Registrar</a></li>
            <li><a href="./carrito.php"><i class="fas fa-shopping-bag"></i></a></li>
        </ul>

    </header>
    <div class="container">
        <h1>iniciar sesión</h1>
        <div class="formulario">
            <form action="#">
                <label for="email">Correo Electronico:</label><br>
                <input type="email" name="email" id="email"><br>
                <label for="pass">Contraseña:</label><br>
                <input type="password" name="pass" id="pass"><br>
                <button onclick="return false;">Ingresar</button><br>
                <a href="#">¿Olvidaste tu contraseña?</a>
            </form>
        </div>

    </div>
    <script src="./public/js/login.js"></script>
</body>

</html>