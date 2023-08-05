<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tienda de Comics</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div id="container">
            <!-- CABECERA -->

            <header id="header">
                <div id="logo">
                    <img src="img/comics.png" alt="comics">
                    <a href="index.php">
                        Tienda de comics
                    </a>
                </div>
            </header>

            <!-- MENU -->

            <nav id="menu">
                <ul>
                    <li>
                        <a href="#">Inicio</a>
                    </li>
                    <li>
                        <a href="#">Categoría 1</a>
                    </li>
                    <li>
                        <a href="#">Categoría 2</a>
                    </li>
                    <li>
                        <a href="#">Categoría 3</a>
                    </li>
                    <li>
                        <a href="#">Categoría 4</a>
                    </li>
                    <li>
                        <a href="#">Categoría 5</a>
                    </li>
                </ul>
            </nav>

            <div id="content">

                <!-- BARRA LATERAL -->
                <aside id="lateral">
                    <div id="login" class="block_aside">
                        <h3>Entrar a la web</h3>
                        <form action="#" method="post">
                            <label for="email">Email</label>
                            <input type="email" name="email">

                            <label for="password">Contraseña</label>
                            <input type="password" name="password">

                            <input type="submit" value="Eviar">
                        </form>
                        <ul>
                            <li><a href="#">Mis pedidos</a></li>
                            <li><a href="#">Gestionar pedidos</a></li>
                            <li><a href="#">Gestionar categorias</a></li>
                        </ul>
                    </div>
                </aside>


                <!-- CONTENIDO CENTRAL -->

                <div id="central">
                    <h1>Productos destacados</h1>
                    <div class="product">
                        <img src="img/comics.png">
                        <h2>Coleccione completa</h2>
                        <p>200 euros</p>
                        <a href="" class="button">Comprar</a>
                    </div>

                    <div class="product">
                        <img src="img/comics.png">
                        <h2>Coleccione completa</h2>
                        <p>200 euros</p>
                        <a href=""class="button">Comprar</a>
                    </div>

                    <div class="product">
                        <img src="img/comics.png">
                        <h2>Coleccione completa</h2>
                        <p>200 euros</p>
                        <a href=""class="button">Comprar</a>
                    </div>
                </div>
            </div>

            <!--FOOTER-->
            <footer id="footer">
                <p>Desarrollado por Sergio Fernández Jiménez &copy; <?= date('Y') ?></p> 
            </footer>

        </div>
    </body>
</html>
