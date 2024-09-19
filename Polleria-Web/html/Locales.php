<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Locales - El Ruedo</title>
        <link rel="icon" href="../img/icon.jpg" type="image/x-icon">
        <link href="../css/DiseñoLocales.css" rel="stylesheet" type="text/css"/>
        <link href="../css/Style_cabecera.css" rel="stylesheet" type="text/css"/>
        <link href="../css/footer.css" rel="stylesheet" type="text/css"/>
    </head>
    <meta name="viewport" content="width=devise-width, initial-scale=1.0">
        <style type="text/css">
            .ambiente {
                width: 100%; /* Ancho máximo del contenedor */
                overflow: hidden; /* Oculta el contenido que desborda el contenedor */
                white-space: nowrap; /* Evita el salto de línea del contenido */
            }

            .ambiente img {
                max-width: 100%; /* Ajusta el ancho máximo de las imágenes */
                height: auto;
                display: inline-block; /* Permite que las imágenes se muestren en línea */
                margin-right: 10px; /* Agrega un margen entre las imágenes */
            }

            .flechas {
                display: flex;
                justify-content: space-between;
                font-size: 30px; /* Ajusta el tamaño de fuente de las flechas */
            }

            .flecha-izquierda,
            .flecha-derecha {
                cursor: pointer;
            }
        </style>
    <body>
        <header><?php include 'cabecera.php'; ?></header>

 

            <div class="locales">
                LOCALES
            </div>

            <main>
                <div class="local1">
                    <div class="icon_sede">
                        <img src="https://lalenaextra.s3.amazonaws.com/custom/img/general/lalena-item-detail-ster.png">
                        <strong>El Ruedo Retablo</strong>
                        <p class="DirSede">Av. Universitaria 7221, Comas 15314</p>
                        <p class="TelSede">960 305 853</p>
                    </div>
                    <div class="googleMaps">
                        <p class="ubicLocal"><a href="https://maps.app.goo.gl/PkExZhST1bZQAj3t6">Ver ubicación</a></p>
                    </div> 
                </div>

                <div class="local2">
                    <div class="icon_sede">
                        <img src="https://lalenaextra.s3.amazonaws.com/custom/img/general/lalena-item-detail-ster.png">
                        <strong>El Ruedo Lucyana</strong>
                        <p class="DirSede">Av. Chimpu Ocllo 240, Urb. Lucyana Carabayllo</p>
                        <p class="TelSede">933 870 987</p>
                    </div>
                    <div class="googleMaps">
                        <p class="ubicLocal"><a href="https://maps.app.goo.gl/1CU2qiQJQ9ShPDny6">Ver ubicación</a></p>
                    </div>
                </div>

                <div class="local3">
                    <div class="icon_sede">
                        <img src="https://lalenaextra.s3.amazonaws.com/custom/img/general/lalena-item-detail-ster.png">
                        <strong>El Ruedo San Antonio</strong>
                        <p class="DirSede">Av. Saco Rojas Mz. A Lt.8, Urb. San Antonio Carabayllo</p>
                        <p class="TelSede">933 870 987</p>
                    </div>
                    <div class="googleMaps">
                        <p class="ubicLocal"><a href="https://maps.app.goo.gl/djePLNfjmm6tAMBZ6">Ver ubicación</a></p>
                    </div>
                </div>


            </main>

           <div class="ambiente">  
            <script type="text/javascript">
                let cuentaFot = 0;

                for (var i = 1; i <= 9; i++) {
                    cuentaFot++;
                    let amb = `
                <img src="../Local/F${cuentaFot}.jpg" alt=""/>`;
                    document.write(amb);
                }
            </script>
        </div>

        <div class="flechas">
            <div class="flecha-izquierda">&#9665;</div>
            <div class="flecha-derecha">&#9655;</div>
        </div>


        </main>
        
        
    </body>
    <footer>
            <?php include 'footer.php'; ?>
        </footer>
            <script
            const ambiente = document.querySelector(".ambiente");
            const flechaIzquierda = document.querySelector(".flecha-izquierda");
            const flechaDerecha = document.querySelector(".flecha-derecha");
            let scrollAmount = 0;

            flechaIzquierda.addEventListener("click", () => {
                scrollAmount -= 100; // Ajusta la cantidad de desplazamiento
                ambiente.scrollTo({
                    top: 0,
                    left: scrollAmount,
                    behavior: "smooth";
                });
            });

            flechaDerecha.addEventListener("click", () => {
                scrollAmount += 100; // Ajusta la cantidad de desplazamiento
                ambiente.scrollTo({
                    top: 0,
                    left: scrollAmount,
                    behavior: "smooth";
                });
            });
        ></script>
            
        
</html>
