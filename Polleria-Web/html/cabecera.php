<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/Style_cabecera.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header class="header">
            <div class="container-hero">
                <div class="container hero">
                    <div class="customer-support">
                        <i class="fa-solid fa-headset"></i>
                        <div class="content-customer-support">
                            <span class="text">Soporte al cliente</span>
                            <span class="number">123-456-7890</span>
                        </div>
                    </div>
                    <script>
                        window.addEventListener('scroll', function () {
                            var navbar = document.querySelector('.container-navbar');
                            var scrollPosition = window.scrollY;

                            if (scrollPosition > 50) {  // Cambia este valor según el punto en el que desees que se active la animación o cambio
                                navbar.classList.add('scrolled');
                            } else {
                                navbar.classList.remove('scrolled');
                            }
                        });

                    </script>
                    <div class="container-logo">
                        <a href="index.php">

                            <img class="logo" src="../img/logo.png" alt=""/>

                        </a>
                    </div>
                    
                    <div class="container-user">
                        <a href="Login.php">
                            <i class="fa-solid fa-user"></i>
                        </a>
                        <i class="fa-solid fa-basket-shopping"></i>
                        <div class="content-shopping-cart">
                            <span class="text">Carrito</span>
                            <span class="number">(0)</span>
                        </div>
                    </div>

                    </div>
                </div>
            </div>

            <div class="container-navbar">
                <nav class="navbar container">
                    <i class="fa-solid fa-bars"></i>
                    <ul class="menu">
                        <li><a href="Carta.php">Carta</a></li>
                        <li><a href="Promociones.php">Promociones</a></li>
                        <li><a href="Locales.php">Locales</a></li>
                        <li><a href="Nosotros.php">Nosotros</a></li>

                    </ul>


                    <ul class="menu-movil">
                        <span id="close-menu" class="close-menu">

                        </span>
                        <li><a href="Carta.php">Carta</a></li>
                        <li><a href="Promociones.php">Promociones</a></li>
                        <li><a href="Locales.php">Locales</a></li>
                        <li><a href="Nosotros.php">Nosotros</a></li>
                        <div class="social-icons">
                            <span class="facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </span>


                            <span class="instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </span>

                        </div>

                    </ul>

                    <script>
                        document.querySelector('.close-menu').addEventListener('click', function () {
                            var menu = document.querySelector('.menu-movil');
                            if (menu.style.display === 'none' || menu.style.display === '') {
                                menu.style.display = 'block';

                            } else {
                                menu.style.display = 'none';

                            }
                        });

                    </script>



                    <script>
                        document.querySelector('.fa-bars').addEventListener('click', function () {
                            var menu = document.querySelector('.menu-movil');
                            if (menu.style.display === 'none' || menu.style.display === '') {
                                menu.style.display = 'block';
                                menu.classList.add('active');
                            } else {
                                menu.style.display = 'none';
                                menu.classList.remove('active');
                            }
                        });

                    </script>

                    <form class="search-form">
                        <input type="search" placeholder="Buscar..." />
                        <button class="btn-search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </nav>
            </div>
        </header>
    </body>
    <script
        src="https://kit.fontawesome.com/81581fb069.js"
        crossorigin="anonymous"
    ></script>




</html>
