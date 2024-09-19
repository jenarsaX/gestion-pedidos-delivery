<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>El Ruedo Resto-Bar (Pollos & Parrillas)</title>
        <link rel="icon" href="../img/icon.jpg" type="image/x-icon">
        <link href="../css/DiseñoBrasa.css" rel="stylesheet" type="text/css"/>
        <link href="../css/DiseñoCarta.css" rel="stylesheet" type="text/css"/>
        <link href="../css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="../css/Style_cabecera.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <header>
            <?php include 'cabecera.php'; ?>
        </header>
        <div class="tipos_platos"> 
            <nav class="nav-carta" role="navigation">
                <ul>
                    <li><a href="Brasas.php">Brasas</li>
                    <li><a href="Piqueos.php">Piqueos</a></li>
                    <li><a href="Postres.php">Postres</a></li>
                    <li><a href="Bebidas.php">Bebidas</a></li>
                </ul>

            </nav>
        </div>  

        <section class="container">
            <div class="products">
                <div class="carts">
                    <div>  
                        <img src="../Postres/brownie.jpg" alt=""/>
                        <p>S/<span>8</span></p>
                    </div>
                    <p class="title">Brownie con helados</p>
                    <a href="" data-id="1" class="btn-add-cart">Agregar al Carrito</a>
                </div>

                <div class="carts">
                    <div>  
                        <img src="../Postres/cheesecake.jpg" alt=""/>
                        <p>S/<span>8</span></p>
                    </div>
                    <p class="title">Cheesecake de frutos rojos</p>
                    <a href="" data-id="1" class="btn-add-cart">Agregar al Carrito</a>
                </div>

                <div class="carts">
                    <div>  
                        <img src="../Postres/cheesecakefresa.jpg" alt=""/>
                        <p>S/<span>32</span></p>
                    </div>
                    <p class="title">Cheesecake de fresa</p>
                    <a href="" data-id="1" class="btn-add-cart">Agregar al Carrito</a>
                </div>

                <div class="carts">
                    <div>  
                        <img src="../Postres/cheesecakeoreo.jpg" alt=""/>
                        <p>S/<span>42</span></p>
                    </div>
                    <p class="title">Cheesecake de oreo</p>
                    <a href="" data-id="1" class="btn-add-cart">Agregar al Carrito</a>
                </div>

                <div class="carts">
                    <div>
                        <img src="../Postres/pieLimon.jpg" alt=""/>
                        <p>S/<span>38</span></p>
                    </div>
                    <p class="title">Pie de limón</p>
                    <a href="" data-id="1" class="btn-add-cart">Agregar al Carrito</a>
                </div>

                <div class="carts">
                    <div>  
                        <img src="../Postres/tortachoc.jpg" alt=""/>
                        <p>S/<span>25</span></p>
                    </div>
                    <p class="title">Torta de chocolate</p>
                    <a href="" data-id="1" class="btn-add-cart">Agregar al Carrito</a>
                </div>

                <div class="carts">
                    <div>  
                        <img src="../Postres/tota3lec.jpg" alt=""/>
                        <p>S/<span>37</span></p>
                    </div>
                    <p class="title">Torta de tres leches</p>
                    <a href="" data-id="1" class="btn-add-cart">Agregar al Carrito</a>
                </div>

                <div class="carts">
                    <div>  
                        <img src="../Postres/volcanchoc.jpg" alt=""/>
                        <p>S/<span>42</span></p>
                    </div>
                    <p class="title">Volcán de chocolate</p>
                    <a href="" data-id="1" class="btn-add-cart">Agregar al Carrito</a>
                </div>

            </div>                               
        </div>
    </section>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>
