<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
            />
        <title>El Ruedo Resto-Bar (Pollos & Parrillas)</title>
        <link rel="icon" href="../img/icon.jpg" type="image/x-icon">
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
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

        <section class="banner">
            <div class="content-banner">

            </div>
        </section>

        <main class="main-content">
            <section class="container container-features">
                <div class="card-feature">
                    <i class="fa-solid fa-car"></i>
                    <div class="feature-content">
                        <span>Deliverí gratuito</span>
                        <p>En pedido superior a S/. 150</p>
                    </div>
                </div>
                <div class="card-feature">
                    <i class="fa-solid fa-wallet"></i>
                    <div class="feature-content">
                        <span>Contrareembolso</span>
                        <p>100% garantía de devolución de dinero</p>
                    </div>
                </div>
                <div class="card-feature">
                    <i class="fa-solid fa-gift"></i>
                    <div class="feature-content">
                        <span>Tarjeta regalo especial</span>
                        <p>Ofrece bonos especiales con descuentos</p>
                    </div>
                </div>
                <div class="card-feature">
                    <i class="fa-solid fa-headset"></i>
                    <div class="feature-content">
                        <span>Servicio al cliente 24/7</span>
                        <p>LLámenos al 123-456-7890</p>
                    </div>
                </div>
            </section>

            <section class="container top-categories">
                <h1 class="heading-1">Mejores Categorías</h1>
                <div class="container-categories">
                    <div class="card-category category-pollo">
                        <p>Pollos a la brasa</p>
                        <span>Ver más</span>
                    </div>
                    <div class="card-category category-pastas">
                        <p>Pastas</p>
                        <span>Ver más</span>
                    </div>
                    <div class="card-category category-parrilladas">
                        <p>Parrilladas</p>
                        <span>Ver más</span>
                    </div>
                </div>
            </section>

            <section class="container top-products">
                <h1 class="heading-1">Mejores Productos</h1>

                <div class="container-options">
                    <span class="active">Destacados</span>
                    <span>Más recientes</span>
                    <span>Mejores Vendidos</span>
                </div>

                <div class="container-products">
                    <!-- Producto 1 -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="../img/prod_1.png" alt="Salchipobre" />

                            <span class="discount">Destacado</span>
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Tallarin saltado de pollo</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-basket-shopping"></i>
                            </span>
                            <p class="price">S/. 25.00</p>
                        </div>
                    </div>
                    <!-- Producto 2 -->
                    <div class="card-product">
                        <div class="container-img">
                            <img
                                src="../img/prod_2.png"
                                alt="OFERTON.jpg"
                                />
                            <span class="discount">50% de descuento</span>
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3>Cordón Bleu</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-basket-shopping"></i>
                            </span>
                            <p class="price">S/. 16.00 <span>S/. 32</span></p>
                        </div>
                    </div>
                    <!--  -->
                    <div class="card-product">
                        <div class="container-img">
                            <img
                                src="../img/prod_3.png"
                                alt="Descuentos"
                                />
                            <span class="discount">Destacado</span>
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3>Cheesecake</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-basket-shopping"></i>
                            </span>
                            <p class="price">S/. 23.00</p>
                        </div>
                    </div>
                    <!--  -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="../img/prod_4.png" alt="Cocteles Clasicos" />
                            <span class="discount">Destacado</span>
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Costillar Dorado</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-basket-shopping"></i>
                            </span>
                            <p class="price">S/. 40.00</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="gallery">
                <img
                    src="../img/Imagen2.jpg"
                    alt="Gallery Img1"
                    class="gallery-img-1"
                    /><img
                    src="../img/Imagen3.jpg"
                    alt="Gallery Img2"
                    class="gallery-img-2"
                    /><img
                    src="../img/Imagen1.jpg"
                    alt="Gallery Img3"
                    class="gallery-img-3"
                    /><img
                    src="../img/Imagen4.jpg"
                    alt="Gallery Img4"
                    class="gallery-img-4"
                    /><img
                    src="../img/Image5.jpg"
                    alt="Gallery Img5"
                    class="gallery-img-5"
                    />
            </section>

        </main>

        <footer class="footer">
            <div class="container container-footer">
                <div class="menu-footer">
                    <div class="contact-info">
                        <p class="title-footer">Empresa</p>
                        <ul>
                            <li>
                                Lo mejor en pollos, parrillas, platos criollos y cocteles lo encuentras en El Ruedo RestoBar Atrévete
                            </li>
                            <li>Atencion delivery: Lima 12:00 pm. a 10:00 pm.</li>
                            <li>Central lima: 917457834</li>
                            <li>EmaiL: elruedorestobar@gmail.com</li>
                        </ul>
                        <div class="social-icons">
                            
                            <span class="facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </span>


                            <span class="instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </span>

                        </div>
                    </div>

                    <div class="information">
                        <p class="title-footer">Información</p>
                        <ul>
                            <li><a href="Nosotros.php">Nuestra historia</a></li>
                            <li><a href="Locales.php">Locales</a></li>
                            <li><a href="FormularioS.php">Sugerencias</a></li>
                        </ul>
                    </div>

                    <div class="my-account">
                        <p class="title-footer">Mi cuenta</p>

                        <ul>
                            <li><a href="#">Mis datos</a></li>
                            <li><a href="#">Mis direcciones</a></li>
                            <li><a href="#">Mis pedidos</a></li>
                        </ul>
                    </div>


                    <div class="my-account">
                        <p class="title-footer">Atención al cliente</p>

                        <ul>
                            <li><a href="preguntasfrecuentes.php">Preguntas frecuentes</a></li>
                            <li><a href="PoliticaDelivery.php">Politicas de delivery</a></li>
                            <li><a href="#">Termino y condiciones</a></li>
                            <li><a href="LibroR.php">Libro de reclamaciones</a></li>
                        </ul>
                    </div>
                </div>

                <div class="copyright">
                    <p>
                        Desarrollado por El Ruedo Restobar &copy; 2023
                    </p>

                    <img src="../img/payment.png" alt="Pagos">
                </div>
            </div>
        </footer>

        <script
            src="https://kit.fontawesome.com/81581fb069.js"
            crossorigin="anonymous"
        ></script>
    </body>
</html>