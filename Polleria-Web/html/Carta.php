<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Carta - El Ruedo</title>
        <link rel="icon" href="../img/icon.jpg" type="image/x-icon">
        <link href="../css/DiseñoCarta.css" rel="stylesheet" type="text/css"/>
        <link href="../css/Style_cabecera.css" rel="stylesheet" type="text/css"/>
        <link href="../css/footer.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <header>
            <?php include 'cabecera.php'; ?>
        </header>
        <div class="tituloCarta">Carta</div>
        <main>
            <div class="container">
                <nav id="carrito">
                    <i class="fa-solid fa-cart-shopping">
                        <div class="buy-card">
                            <ul class="nav-card">
                                <li>Imagen</li>
                                <li>Nombre</li>
                                <li>Precio</li>
                                <li>Cantidad</li>
                                <li></li>
                            </ul>
                            <div class="lista_de_cursos">

                            </div>
                            <button id="vaciar_carrito">VACIAR CARRITO</button>
                        </div>
                    </i>
                </nav>



                <div class="categorias" id="categorias">
                    <div class="categoria activa" data-categoria="brasas">
                        <img data-v-546cb430="" 
                             src="https://s3-rokys-pro.s3.amazonaws.com/media/catalog/category/rokys-brasa-1.svg" 
                             alt="" 
                             class="activate-img">
                        <p>Brasas</p>
                    </div>

                    <div class="categoria" data-categoria="piqueos">
                        <img data-v-546cb430="" 
                             src="https://s3-rokys-pro.s3.amazonaws.com/media/catalog/category/corner-rokys_1.svg" 
                             alt="" 
                             class="activate-img">
                        <p>Piqueos</p>
                    </div>

                    <div class="categoria" data-categoria="postres">
                        <img data-v-546cb430="" 
                             src="https://s3-rokys-pro.s3.amazonaws.com/media/catalog/category/fusion_criolla-01.svg" 
                             alt="" 
                             class="activate-img">
                        <p>Postres</p>
                    </div>

                    <div class="categoria" data-categoria="bebidas">
                        <img data-v-546cb430="" 
                             src="https://s3-rokys-pro.s3.amazonaws.com/media/catalog/category/corner-rokys_1.svg" 
                             alt="" 
                             class="activate-img">
                        <p>Bebidas</p>
                    </div>
                </div> 

                <?php
                require_once './conectaBD.php';
                $cnx = getConexion();
                function getList() {
                    global $cnx;
                    $cadSQL = "SELECT id,nombre,descripcion,precio,foto from brasas";
                    $registros = mysqli_query($cnx, $cadSQL);
                    while ($row = mysqli_fetch_assoc($registros)) {
                        $listaProducto[] = $row;
                    }
                    return $listaProducto;
                }
                $listaProducto = getList();
                ?>
                
                <?php
                require_once './conectaBD.php';
                $cnx = getConexion();
                function getList2() {
                    global $cnx;
                    $cadSQL = "SELECT id,nombre,descripcion,precio,foto from piqueos";
                    $registros = mysqli_query($cnx, $cadSQL);
                    while ($row = mysqli_fetch_assoc($registros)) {
                        $listaPiqueos[] = $row;
                    }
                    return $listaPiqueos;
                }
                $listaPiqueos = getList2();
                ?>
                
                <?php
                require_once './conectaBD.php';
                $cnx = getConexion();
                function getList3() {
                    global $cnx;
                    $cadSQL = "SELECT id,nombre,descripcion,precio,foto from postres";
                    $registros = mysqli_query($cnx, $cadSQL);
                    while ($row = mysqli_fetch_assoc($registros)) {
                        $listaPostres[] = $row;
                    }
                    return $listaPostres;
                }
                $listaPostres = getList3();
                ?>
                
                <?php
                require_once './conectaBD.php';
                $cnx = getConexion();
                function getList4() {
                    global $cnx;
                    $cadSQL = "SELECT id,nombre,descripcion,precio,foto from bebidas";
                    $registros = mysqli_query($cnx, $cadSQL);
                    while ($row = mysqli_fetch_assoc($registros)) {
                        $listaBebidas[] = $row;
                    }
                    return $listaBebidas;
                }
                $listaBebidas = getList4();
                ?>


                <div class="grid" id="lista-cursos">             
                    <div class="contenedor-platos" data-categoria="brasas" id="lista-platos">
                        <?php
                        $id = 1; // Variable para mantener el contador de ID
                        foreach ($listaProducto as $fila) {
                            ?>
                            <div class="items">
                                <img src="../Brasas/<?php echo $fila["foto"]; ?>" alt=""/>
                                <div class="info">
                                    <h3><?php echo $fila["nombre"]; ?></h3>
                                    <p><?php echo $fila["descripcion"]; ?></p>
                                    <div class="precio">
                                        <p class="descuento">S/<?php echo $fila["precio"]; ?></p>
                                    </div>
                                    <button class="agregar-carrito" data-id="<?php echo $id; ?>">Agregar al Carrito</button>
                                 <?php $id++; // Incrementa el contador de ID para el siguiente elemento ?>
                                </div>
                            </div>
                        <?php } ?>                      
                    </div>

                    <div class="contenedor-platos" data-categoria="piqueos" id="lista-platos">
                        <?php
                        $id = 18; // Variable para mantener el contador de ID
                        foreach ($listaPiqueos as $fila) {
                            ?>
                            <div class="items">
                                <img src="../Piqueos/<?php echo $fila["foto"]; ?>" alt=""/>
                                <div class="info">
                                    <h3><?php echo $fila["nombre"]; ?></h3>
                                    <p><?php echo $fila["descripcion"]; ?></p>
                                    <div class="precio">
                                        <p class="descuento">S/<?php echo $fila["precio"]; ?></p>
                                    </div>
                                    <button class="agregar-carrito" data-id="<?php echo $id; ?>">Agregar al Carrito</button>
                                 <?php $id++; // Incrementa el contador de ID para el siguiente elemento ?>
                                </div>
                            </div>
                        <?php } ?>   
                    </div>
                                      

                    <div class="contenedor-platos" data-categoria="postres" id="lista-platos">
                        <?php
                        $id = 26; // Variable para mantener el contador de ID
                        foreach ($listaPostres as $fila) {
                            ?>
                            <div class="items">
                                <img src="../Postres/<?php echo $fila["foto"]; ?>" alt=""/>
                                <div class="info">
                                    <h3><?php echo $fila["nombre"]; ?></h3>
                                    <p><?php echo $fila["descripcion"]; ?></p>
                                    <div class="precio">
                                        <p class="descuento">S/<?php echo $fila["precio"]; ?></p>
                                    </div>
                                    <button class="agregar-carrito" data-id="<?php echo $id; ?>">Agregar al Carrito</button>
                                 <?php $id++; // Incrementa el contador de ID para el siguiente elemento ?>
                                </div>
                            </div>
                        <?php } ?> 
                    </div>

                    <div class="contenedor-platos" data-categoria="bebidas" id="lista-platos">
                        <?php
                        $id = 34; // Variable para mantener el contador de ID
                        foreach ($listaBebidas as $fila) {
                            ?>
                            <div class="items">
                                <img src="../Bebidas/<?php echo $fila["foto"]; ?>" alt=""/>
                                <div class="info">
                                    <h3><?php echo $fila["nombre"]; ?></h3>
                                    <p><?php echo $fila["descripcion"]; ?></p>
                                    <div class="precio">
                                        <p class="descuento">S/<?php echo $fila["precio"]; ?></p>
                                    </div>
                                    <button class="agregar-carrito" data-id="<?php echo $id; ?>">Agregar al Carrito</button>
                                 <?php $id++; // Incrementa el contador de ID para el siguiente elemento ?>
                                </div>
                            </div>
                        <?php } ?>
                </div>
        </main>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
    </body>

    <script>
        const categorias = document.querySelectorAll('.categoria');
        const contenedorPlatos = document.querySelectorAll('.contenedor-platos');
        let categoriaActiva = null;

        categorias.forEach((categoria) => {
            categoria.addEventListener('click', (e) => {
                categorias.forEach((elemento) => {
                    elemento.classList.remove('activa');
                });

                e.currentTarget.classList.toggle('activa');
                categoriaActiva = categoria.getAttribute('data-categoria');

                // Mostrar u ocultar contenedores de platos según la categoría seleccionada
                contenedorPlatos.forEach((contenedor) => {
                    const dataCategoria = contenedor.getAttribute('data-categoria');
                    if (dataCategoria === categoriaActiva) {
                        contenedor.style.display = 'block';
                    } else {
                        contenedor.style.display = 'none';
                    }
                });
            });
        });
    </script>

    <script src="../js/ScripCarta.js" type="text/javascript"></script>

</html>
