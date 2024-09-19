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
                        <img src="../Piqueos/alitasAcev.jpg" alt=""/>
                        <p>S/<span>12</span></p>
                    </div>
                    <p class="title">Alitas acevichadas</p>
                    <a href="" data-id="1" class="btn-add-cart">Agregar al Carrito</a>
                </div>

                <div class="carts">
                    <div>  
                        <img src="../Piqueos/alitasBBQ.jpg" alt=""/>
                        <p>S/<span>12</span></p>
                    </div>
                    <p class="title">Alitas a la BBQ</p>
                    <a href="" data-id="1" class="btn-add-cart">Agregar al Carrito</a>
                </div>

                <div class="carts">
                    <div>  
                        <img src="../Piqueos/anticucho.jpg" alt=""/>
                        <p>S/<span>23</span></p>
                    </div>
                    <p class="title">Anticuchos</p>
                    <a href="" data-id="1" class="btn-add-cart">Agregar al Carrito</a>
                </div>

                <div class="carts">
                    <div>  
                        <img src="../Piqueos/bufalo.jpg" alt=""/>
                        <p>S/<span>12</span></p>
                    </div>
                    <p class="title">Alitas búfalo</p>
                    <a href="" data-id="1" class="btn-add-cart">Agregar al Carrito</a>
                </div>

                <div class="carts">
                    <div>
                        <img src="../Piqueos/costillasBBQ.png" alt=""/>
                        <p>S/<span>25</span></p>
                    </div>
                    <p class="title">Costillas a la BBQ </p>
                    <a href="" data-id="1" class="btn-add-cart">Agregar al Carrito</a>
                </div>

                <div class="carts">
                    <div>  
                        <img src="../Piqueos/hamburguesa.jpg" alt=""/>
                        <p>S/<span>10</span></p>
                    </div>
                    <p class="title">Hamburguesa</p>
                    <a href="" data-id="1" class="btn-add-cart">Agregar al Carrito</a>
                </div>

                <div class="carts">
                    <div>  
                        <img src="../Piqueos/salchipobre.jpg" alt=""/>
                        <p>S/<span>8</span></p>
                    </div>
                    <p class="title">Salchi_Pobre</p>
                    <a href="" data-id="1" class="btn-add-cart">Agregar al Carrito</a>
                </div>

                <div class="carts">
                    <div>  
                        <img src="../Piqueos/teriyaki.jpg" alt=""/>
                        <p>S/<span>42</span></p>
                    </div>
                    <p class="title">Teriyaki</p>
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
