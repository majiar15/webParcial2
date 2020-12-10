<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subastas online</title>

    <link rel="stylesheet" href="./public/css/adminPrincipal.css">
    <link rel="stylesheet" href="./public/css/mainAdmin.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <aside>
            <div id="headerBarra" class="headerBarra">

                <h3><a href="./adminPrincipal.php"> Daniel Salinas</a></h3>
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

                <a href="./index.html">cerrar sesion</a>
            </div>
            <div class="containerCard">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-hand-holding-usd"></i>
                        <div class="title">
                            Ventas Totales por mes
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="valorMes">$100.000.000</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-users"></i>
                        <div class="title">Usuarios registrados por mes</div>
                    </div>
                    <div class="card-body">
                        <div class="valorMes">$1.000</div>
                    </div>
                </div>
            </div>
            <div id="containerChart">
                <canvas id="chartSellvsTime" width="100"></canvas>
            </div>

            <!-- <div class="grafica"><img src="./public/assets/img/grafica.jpg" alt=""></div> -->
        </main>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
    <script src="./public/js/adminPrincipal.js"></script>
</body>

</html>