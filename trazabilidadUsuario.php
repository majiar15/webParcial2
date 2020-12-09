<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subastas online</title>

    <link rel="stylesheet" href="./public/css/trazabilidadUsuario-produto.css">
    <link rel="stylesheet" href="./public/css/mainAdmin.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <aside>

            <div class="headerBarra">

                <h3>Daniel Salinas</h3>
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
                <h1>Trazabilidad de usuario</h1>

            </div>
            <div class="container-2">
                <div class="usuario">
                    <h3>Usuario con mas productos publicados</h3>
                    <table>
                        <thead>
                            <th>CC</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Cantidad de productos</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>100010101</td>
                                <td>Jose</td>
                                <td>Gil Santana</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>100010101</td>
                                <td>Jose</td>
                                <td>Gil Santana</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>100010101</td>
                                <td>Jose</td>
                                <td>Gil Santana</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>100010101</td>
                                <td>Jose</td>
                                <td>Gil Santana</td>
                                <td>10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>




                <div class="usuario">
                    <h3>Usuario con mayor ventas</h3>
                    <table>
                        <thead>
                            <th>CC</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Cantidad de ventas</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>100010101</td>
                                <td>Jose</td>
                                <td>Gil Santana</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>100010101</td>
                                <td>Jose</td>
                                <td>Gil Santana</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>100010101</td>
                                <td>Jose</td>
                                <td>Gil Santana</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>100010101</td>
                                <td>Jose</td>
                                <td>Gil Santana</td>
                                <td>10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="usuario">
                    <h3>Usuario con menos activo</h3>
                    <table>
                        <thead>
                            <th>CC</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>ultima fecha de actividad</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>100010101</td>
                                <td>Jose</td>
                                <td>Gil Santana</td>
                                <td>10:40</td>
                            </tr>
                            <tr>
                                <td>100010101</td>
                                <td>Jose</td>
                                <td>Gil Santana</td>
                                <td>10:40</td>
                            </tr>
                            <tr>
                                <td>100010101</td>
                                <td>Jose</td>
                                <td>Gil Santana</td>
                                <td>10:40</td>
                            </tr>
                            <tr>
                                <td>100010101</td>
                                <td>Jose</td>
                                <td>Gil Santana</td>
                                <td>10:40</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="usuario">
                    <h3>Usuario con mejor rankakeados</h3>
                    <table>
                        <thead>
                            <th>CC</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>nivel de ranking</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>100010101</td>
                                <td>Jose</td>
                                <td>Gil Santana</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>100010101</td>
                                <td>Jose</td>
                                <td>Gil Santana</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>100010101</td>
                                <td>Jose</td>
                                <td>Gil Santana</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>100010101</td>
                                <td>Jose</td>
                                <td>Gil Santana</td>
                                <td>7</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>


    </div>

</body>

</html>