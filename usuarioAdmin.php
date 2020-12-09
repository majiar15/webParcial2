<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subastas online</title>

    <link rel="stylesheet" href="./public/css/usuario-productoAdmin.css">
    <link rel="stylesheet" href="./public/css/mainAdmin.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <aside>
            <div class="headerBarra">

                <h3> Daniel Salinas</h3>
                <p>Administrador</p>
            </div>
            <div class="lateralBody">
                <div class="usuario">
                    <ul>
                        <a href="./adminPrincipal.php"><li>Inicio</li> </a>
                    </ul>
                    <h4><i class="fas fa-user"></i> Usuarios</h4>
                    <ul>
                        <a href="./usuarioAdmin.php"><li>Consultar usuario </li></a>
                        <a href="./trazabilidadUsuario.php"><li>Trazabilidad</li></a>
                    </ul>
                </div>
                <div class="productos">
                    <h4><i class="fas fa-shopping-bag"></i> productos</h4>
                    <ul>
                        <a href="./productoAdmin.php"><li>Consultar producto</li> </a>
                        <a href="./trazabilidadProducto.php"><li>Trazabilidad</li></a>
                    </ul>
                </div>
            </div>

        </aside>
        <main>
            <div class="btn-Cerrar-sesion">

                <a href="./index.php">cerrar sesion</a>
            </div>
            <div class="title">
                <h1>Consulta por usuario</h1>

            </div>
            <div class="buscador">
                <input type="text" name="buscador" id="buscador" placeholder="Buscar">
            </div>
            <div class="containerTabla">
                <table>
                    <thead>
                        <tr>
                            <th>CC</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Direccion</th>
                            <th>Pais</th>
                            <th>Ciudad</th>
                        </tr>
                    </thead>

                    <tr>
                        <td>1929292922</td>
                        <td>Luis</td>
                        <td>Solano Arrienta</td>
                        <td>luissolano@gmail.com</td>
                        <td>Cra 80#55-90</td>
                        <td>Colombia</td>
                        <td>Barranquilla</td>
                    </tr>
                    <tr>
                        <td>1929292922</td>
                        <td>Luis</td>
                        <td>Solano Arrienta</td>
                        <td>luissolano@gmail.com</td>
                        <td>Cra 80#55-90</td>
                        <td>Colombia</td>
                        <td>Barranquilla</td>
                    </tr>
                    <tr>
                        <td>1929292922</td>
                        <td>Luis</td>
                        <td>Solano Arrienta</td>
                        <td>luissolano@gmail.com</td>
                        <td>Cra 80#55-90</td>
                        <td>Colombia</td>
                        <td>Barranquilla</td>
                    </tr>
                    <tr>
                        <td>1929292922</td>
                        <td>Luis</td>
                        <td>Solano Arrienta</td>
                        <td>luissolano@gmail.com</td>
                        <td>Cra 80#55-90</td>
                        <td>Colombia</td>
                        <td>Barranquilla</td>
                    </tr>
                    <tr>
                        <td>1929292922</td>
                        <td>Luis</td>
                        <td>Solano Arrienta</td>
                        <td>luissolano@gmail.com</td>
                        <td>Cra 80#55-90</td>
                        <td>Colombia</td>
                        <td>Barranquilla</td>
                    </tr>
                    <tr>
                        <td>1929292922</td>
                        <td>Luis</td>
                        <td>Solano Arrienta</td>
                        <td>luissolano@gmail.com</td>
                        <td>Cra 80#55-90</td>
                        <td>Colombia</td>
                        <td>Barranquilla</td>
                    </tr>


                </table>
            </div>


        </main>

    </div>

</body>

</html>