<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subastas.com</title>
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <script src="./public/js/menu.js" defer></script>
</head>

<body>
    <header>
        
        <div class="logo"><img src="/public/assets/img/logo.PNG" alt=""></div>
        
        <ul class="menu_items">
            <li>
                <a href="./index.html">Inicio</a>
                <div class="Linea"></div>
            </li>
            <li><a href="#">Categorias</a></li>
            <li><a href="./subastas.php">Subastas</a></li>
            <li><a href="./ventas.php">Ventas</a></li>
            <li> <a href="./login.php">Login</a></li>
            <li><a href="./Registrar.php">Registrar</a></li>

            <li><a href="./carrito.php"><i class="fas fa-shopping-bag"></i></a></li>
        </ul>
        <div class="menu_bar"><i class="fas fa-bars"></i></div>

    </header>
    <main>
        <section>
            <div class="banner">
                <img src="./public/assets/img/laptop-banner.png" alt="banner shop">
            </div>
        </section>
        <section class="products">

            <aside>
                <h3>Filtro</h3>
                <div class="Linea"></div>
                <ul>
                    <li><strong> Marca</strong>
                        <div class="Linea"></div>
                        <ul>
                            <li>Iphone</li>
                            <li>Redmi</li>
                            <li>Samsung</li>
                            <li>Motorola</li>

                        </ul>
                    </li>
                    <li><strong>Modelo</strong>
                        <div class="Linea"></div>
                        <ul>
                            <li>iphone 7</li>
                            <li>iphone 6</li>
                            <li>iphone 8</li>
                            <li>iphone x</li>
                            <li>iphone 11</li>
                            <li>iphone 11 pro</li>
                        </ul>

                    </li>
                    <li><strong>Precio</strong>
                        <div class="Linea"></div>
                        <ul>
                            <li>
                                <input type="number" name="min" id="min" placeholder="Min">
                                <input type="number" name="min" id="min" placeholder="Max">
                                <input type="button" value="Ir">
                            </li>
                        </ul>
                    </li>

                </ul>
            </aside>
            <div class="container-2">
                <div class="card">
                    <div class="card-header">
                        <a href="./Descripcion.html">
                            <div class="imageContainer">
                                <img src="./public/assets/img/iphone11.jpg" alt="iphone 11">
                            </div>
                        </a>
                    </div>
                    <div class="card-body">

                        <div class="title">Iphone 11</div>
                        <div class="estrellas">
                            <i class=" fas fa-star"></i><i class=" fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i>
                        </div>

                        <div class="price animate__animated ">$11.111.000</div>
                        <a href="#" class="btn-comprar animate__animated animate__fadeInDown">comprar</a>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="./Descripcion.html">
                            <div class="imageContainer">
                                <img src="./public/assets/img/iphone11.jpg" alt="iphone 11">
                            </div>
                        </a>
                    </div>
                    <div class="card-body">

                        <div class="title">Iphone 11</div>
                        <div class="estrellas">
                            <i class=" fas fa-star"></i><i class=" fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i>
                        </div>

                        <div class="price">$11.111.000</div>
                        <a href="#" class="btn-comprar animate__animated animate__fadeInDown">Pujar</a>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="./Descripcion.html">
                            <div class="imageContainer">
                                <img src="./public/assets/img/iphone11.jpg" alt="iphone 11">
                            </div>
                        </a>
                    </div>
                    <div class="card-body">

                        <div class="title">Iphone 11</div>
                        <div class="estrellas">
                            <i class=" fas fa-star"></i><i class=" fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i>
                        </div>

                        <div class="price">$11.111.000</div>
                        <a href="#" class="btn-comprar animate__animated animate__fadeInDown">comprar</a>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="./Descripcion.html">
                            <div class="imageContainer">
                                <img src="./public/assets/img/iphone11.jpg" alt="iphone 11">
                            </div>
                        </a>
                    </div>
                    <div class="card-body">

                        <div class="title">Iphone 11</div>
                        <div class="estrellas">
                            <i class=" fas fa-star"></i><i class=" fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i>
                        </div>

                        <div class="price">$11.111.000</div>
                        <a href="#" class="btn-comprar animate__animated animate__fadeInDown">Pujar</a>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="./Descripcion.html">
                            <div class="imageContainer">
                                <img src="./public/assets/img/iphone11.jpg" alt="iphone 11">
                            </div>
                        </a>
                    </div>
                    <div class="card-body">

                        <div class="title">Iphone 11</div>
                        <div class="estrellas">
                            <i class=" fas fa-star"></i><i class=" fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i>
                        </div>

                        <div class="price">$11.111.000</div>
                        <a href="#" class="btn-comprar animate__animated animate__fadeInDown">comprar</a>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="./Descripcion.html">
                            <div class="imageContainer">
                                <img src="./public/assets/img/iphone11.jpg" alt="iphone 11">
                            </div>
                        </a>
                    </div>
                    <div class="card-body">

                        <div class="title">Iphone 11</div>
                        <div class="estrellas">
                            <i class=" fas fa-star"></i><i class=" fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i>
                        </div>

                        <div class="price">$11.111.000</div>
                        <a href="#" class="btn-comprar animate__animated animate__fadeInDown">comprar</a>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="./Descripcion.html">
                            <div class="imageContainer">
                                <img src="./public/assets/img/iphone11.jpg" alt="iphone 11">
                            </div>
                        </a>
                    </div>
                    <div class="card-body">

                        <div class="title">Iphone 11</div>
                        <div class="estrellas">
                            <i class=" fas fa-star"></i><i class=" fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i>
                        </div>

                        <div class="price">$11.111.000</div>

                        <a href="#" class="btn-comprar animate__animated animate__fadeInDown">comprar</a>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="./Descripcion.html">
                            <div class="imageContainer">
                                <img src="./public/assets/img/iphone11.jpg" alt="iphone 11">
                            </div>
                        </a>
                    </div>
                    <div class="card-body">

                        <div class="title">Iphone 11</div>
                        <div class="estrellas">
                            <i class=" fas fa-star"></i><i class=" fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i>
                        </div>

                        <div class="price">$11.111.000</div>
                        <a href="#" class="btn-comprar animate__animated animate__fadeInDown">comprar</a>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header">
                        <a href="./Descripcion.html">
                            <div class="imageContainer">
                                <img src="./public/assets/img/iphone11.jpg" alt="iphone 11">
                            </div>
                        </a>
                    </div>
                    <div class="card-body">

                        <div class="title">Iphone 11</div>
                        <div class="estrellas">
                            <i class=" fas fa-star"></i><i class=" fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i><i class="star fas fa-star"></i>
                        </div>

                        <div class="price">$11.111.000</div>
                        <a href="#" class="btn-comprar animate__animated animate__fadeInDown">comprar</a>
                    </div>

                </div>
            </div>



        </section>
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
                <i class="fab fa-facebook-f"></i>
                <p>Facebook</p>
                <i class="fab fa-twitter"></i>
                <p>Twitter</p>
                <i class="fab fa-google-play"></i>
                <p>Play store</p>
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