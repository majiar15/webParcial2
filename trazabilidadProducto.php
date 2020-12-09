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
                        <a href="./adminPrincipal.html"><li>Inicio</li> </a>
                    </ul>
                    <h4><i class="fas fa-user"></i> Usuarios</h4>
                    <ul>
                        <a href="./usuarioAdmin.html"><li>Consultar usuario </li></a>
                        <a href="./trazabilidadUsuario.html"><li>Trazabilidad</li></a>
                    </ul>
                </div>
                <div class="productos">
                    <h4><i class="fas fa-shopping-bag"></i> productos</h4>
                    <ul>
                        <a href="./productoAdmin.html"><li>Consultar producto</li> </a>
                        <a href="./trazabilidadProducto.html"><li>Trazabilidad</li></a>
                    </ul>
                </div>
            </div>

        </aside>
        <main>
            <div class="btn-Cerrar-sesion">

                <a href="./index.html">cerrar sesion</a>
            </div>
            <div class="title">
                <h1>Trazabilidad de productos</h1>

            </div>
            <div class="container-2">
                <div class="usuario">
                    <h3>Productos con mayores ventas</h3>
                    <table>
                        <thead>
                            <th>Id</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>numero de ventas</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>100010101</td>
                                <td>Apple</td>
                                <td>Iphone 11</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <td>100010101</td>
                                <td>Apple</td>
                                <td>Iphone 11</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <td>100010101</td>
                                <td>Apple</td>
                                <td>Iphone 11</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <td>100010101</td>
                                <td>Apple</td>
                                <td>Iphone 11</td>
                                <td>200</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="usuario">
                    <h3>Producto con menos ventas</h3>
                    <table>
                        <thead>
                            <th>Id</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>numero de ventas</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>100011</td>
                                <td>Hp</td>
                                <td>Laptop hp-30ie11</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>100011</td>
                                <td>Hp</td>
                                <td>Laptop hp-30ie11</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>100011</td>
                                <td>Hp</td>
                                <td>Laptop hp-30ie11</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>100011</td>
                                <td>Hp</td>
                                <td>Laptop hp-30ie11</td>
                                <td>10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </main>


    </div>

</body>

</html>