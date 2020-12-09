<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subastas.com</title>
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/vender-subastar.css">
    <link rel="stylesheet" href="./public/css/usuarioLogueado.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="title"><img src="/public/assets/img/logo.PNG" alt=""></div>
        <ul>
            <li>
                <a href="./usuarioLogueado.php">Inicio</a>
                <div class="Linea"></div>
            </li>
            <li><a href="#">Categorias</a></li>
            <li><a href="#">Subastas</a></li>
            <li><a href="#">Ventas</a></li>
            <li><a href="./carrito.html"><i class="fas fa-shopping-bag"></i></a></li>
            <li id="miCuenta">
                Mi cuenta

                <ul id="subMenuCuenta" class="animate__animated animate__slideInRight">
                    <li><a href="./PerfilUsuario.php">mi perfil</a></li>
                    <li><a href="./misCompras.php">mis compras</a></li>
                    <li><a href="./Pujas.php">mis pujas</a></li>
                    <li><a href="#">vender/subastar</a></li>
                    <li><a href="/index.php">cerrar sesion</a></li>
                </ul>
            </li>
        </ul>

    </header>
    <main>
        <h1>Producto</h1>
        <div class="perfil">
            <h3>Agregar Producto</h3>
            <form action="#">
                <div class="formulario">
                    <label for="nombre">Marca:</label>
                    <input type="text" name="nombre" id="nombre"><br>
                </div>
                <div class="formulario">
                    <label for="modelo">Modelo:</label>
                    <input type="text" name="apellido" id="apellido"><br>
                </div>
                <div class="formulario">
                    <label for="cc">Precio:</label>
                    <input type="number" name="cc" id="cc"><br>
                </div>

                <div class="formulario">
                    <label for="pais">Stock:</label>
                    <input type="number" name="pais" id="pais"><br>
                </div>
                <div class="formulario">
                    <label for="Imagen">Imagen</label>
                    <input type="file" name="imagen" id="imagen">
                </div>
                <div class="formulario">
                    <label for="ciudad">Descripcion:</label>
                    <textarea name="descripcion" id="descripcion" cols="41" rows="2"></textarea>
                </div>
                <div class="botones">
                    <button>vender</button> <button>Subastar</button>
                </div>


            </form>
        </div>


    </main>


    <footer>
        <div class="container-footer">
            <div class="sobreNosotros">
                <h3>Sobre Nosotros</h3>
                <p>Somos la empresa #1 en venta y subastas electronica y queremos seguir creciendo </p>
                <p> copyright &copy; todos los derechos reservado</p><br>
                <p>Desarrollado por:</p>
                <p>Daniel Salinas</p>
                <p>Martin Jimenez</p>
            </div>
            <div class="center">
                <h3>Redes Sociales </h3>
                <div class="redes">
                    <i class="fab fa-facebook-f"></i>
                    <p>Facebook</p>
                    <i class="fab fa-twitter"></i>
                    <p>Twitter</p>
                    <i class="fab fa-google-play"></i>
                    <p>Play store</p>
                </div>
               
            </div>
            <div class="contacto">
                <h3>Contacto</h3>
                <p>Gmail:contacto@subastaonline.com</p>
                <p>Tel: (+57)300000</p>
            </div>
        </div>

    </footer>
    <script>
    </script>
</body>

</html>