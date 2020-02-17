<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Tienda de camisetas</title>
        <link rel="stylesheet" href="assets/css/styles.css"
    </head>
    <body>
        <!--Cabecera-->
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Camiseta Logo"/>
                <a href="index.php">
                    Tienda de camisetas
                </a>
            </div>
        </header>

        <!--menu-->
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="#">
                        Categoria 1
                    </a>
                </li>
                <li>
                    <a href="#">
                        Categoria 2
                    </a>
                </li>
                <li>
                    <a href="#">
                        Categoria 3
                    </a>
                </li>
                <li>
                    <a href="#">
                        Categoria 4
                    </a>
                </li>
            </ul>
        </nav>

        <div id="content">
            <!--lateral-->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <form action="#" method="post">
                        <label form="email">Email</label>
                        <input type="email" name="email"/>

                        <label form="password">Contraseña</label>
                        <input type="password" name="password"/>

                        <input type="submit" value="Enviar"/>
                    </form>

                    <a href="#">Mis pedidos</a>
                    <a href="#">Gestionar pedidos</a>
                    <a href="#">Gestionar categorias</a>
                </div>
            </aside>

            <!--contenido central-->
            <div id="central">
                <h1>Productos destacados</h1>
                <div class="product">
                    <img src="assets/img/camiseta.png"/>
                    <h2>Camiseta azul ancha</h2>
                    <p>90000 Pesos</p>
                    <a href="#">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png"/>
                    <h2>Camiseta azul ancha</h2>
                    <p>90000 Pesos</p>
                    <a href="#">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png"/>
                    <h2>Camiseta azul ancha</h2>
                    <p>90000 Pesos</p>
                    <a href="#">Comprar</a>
                </div>
            </div>

        </div>
        <!--pie de pagina-->
        <footer id="footer">
            <p>Desarrollado por Jaime Andres Serna WEB&copy;<?=date('Y')?></p>
        </footer>
    </body>
</html>