<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Politicas de Deliveri - El Ruedo Resto-Bar (Pollos & Parrillas)</title>
        <link rel="icon" href="../img/icon.jpg" type="image/x-icon">
        <link href="../css/Style_cabecera.css" rel="stylesheet" type="text/css"/>
        <link href="../css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="../css/DiseñoPoliticasDelivery.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style_preguntasfre.css" rel="stylesheet" type="text/css"/>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const toggleButtons = document.querySelectorAll(".toggle-button");

                toggleButtons.forEach(function (button) {
                    button.addEventListener("click", function () {
                        const targetId = button.getAttribute("data-target");
                        const targetElement = document.getElementById(targetId);

                        if (targetElement.style.display === "none" || targetElement.style.display === "") {
                            targetElement.style.display = "block";
                        } else {
                            targetElement.style.display = "none";
                        }
                    });
                });
            });
        </script>

    </head>
    <body>
        <header>
            <?php include 'cabecera.php'; ?>
        </header>
        <div class="politicas">
            POLÍTICAS DE DELIVERY
        </div>

        <div class="cont">
            <p>Estimado cliente, a continuación, te presentamos los Términos
                y Condiciones de nuestra Política de Delivery. Te recomendamos
                que la revises cuando realices tus pedidos por este medio.</p>

            <div class="contenedor-pregunta">
                <h1 class="toggle-button" data-target="sobre-delivery">SOBRE EL SERVICIO DE DELIVERY</h1>
                <div id="sobre-delivery" style="display: none;">
                    <ul>
                        <li>
                            El servicio de delivery se brinda respecto de aquellos
                            pedidos efectuados por los Clientes a través de las
                            siguientes vías: (i) vía telefónica o (ii) vía online,
                            realizando el pedido a través de la web
                            (tienda virtual web).                          
                        </li>
                        <li>
                            Nuestro canal de delivery y llevar tienen una variación
                            de precio con respecto nuestro costos de salón debido
                            a la operación logística que conlleva (empaques, 
                            implementación operacional u otros).
                        </li>
                        <li>
                            La zona de Reparto es limitada e informada por el
                            operador en la llamada. Si hace el pedido vía online,
                            se indicará la cobertura de reparto al ingresar la 
                            dirección en la plataforma web.
                        </li>
                        <li>
                            El pedido viene con diferentes piezas de pollo y salsas
                            (pirotines). Las salsas con las que contamos son mayonesa, 
                            ají, kétchup, mostaza y ají carretillero serán enviadas 
                            junto con tu pedido, de conformidad con la disponibilidad 
                            de sabores de cada tienda y si estas pertenecen a la lista 
                            disponible de acuerdo al producto de su elección. La 
                            cantidad de salsas variarán según el pedido que se 
                            realice:
                            Si el cliente desea solicitar salsa adicional podrá 
                            adquirirlo con un monto adicional de S/1.00
                        </li>
                        <li>
                            Es responsabilidad del cliente asegurarse que, al 
                            momento de la entrega del producto, este se encuentra 
                            conforme y firmar el ticket de conformidad al motorizado 
                            en caso se pagó en línea.
                        </li>
                        <li>
                            La empresa se reserva el derecho de suspender el 
                            servicio de delivery en cualquier momento
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contenedor-pregunta">
                <h1 class="toggle-button" data-target="horario-delivery">HORARIO DE DELIVERY</h1>
                <div id="horario-delivery" style="display: none;">
                    <ul>
                        <li>
                            Los horarios de atención del delivery podrán estar 
                            sujetos a modificaciones por diferentes motivos,
                            entre ellos: cierre de tienda, días festivos y/o 
                            feriados, huelgas, condiciones de clima (lluvias, 
                            neblina, garúa, etc.), desastres naturales (sismos, 
                            terremotos, huaycos, entre otros), días de eventos 
                            deportivos/partidos de fútbol o ubicación de la 
                            vivienda (dificultades de acceso en determinadas 
                            horas, incremento de peligrosidad, etc.); lo cual
                            será informado al momento en que usted se contacte 
                            con nosotros para realizar su pedido.                          
                        </li>
                    </ul>
                </div>
            </div>
                <div class="contenedor-pregunta">
                <h1 class="toggle-button" data-target="politicas-cambio">POLÍTICAS DE CAMBIO DE PRODUCTO</h1>
                <div id="politicas-cambio" style="display: none;">
                    <ul>
                        <li>
                            El cliente podrá presentar su reclamo por producto en
                            mal estado o envió de productos erróneo, para lo cual
                            deberá comunicarse en Lima (01)123-4567 o al correo 
                            atencionalcliente@adv.com.pe; y de ser de su preferencia
                            puedes registrar su queja a través de nuestro libro de
                            reclamaciones virtual en la página web. 
                        </li>
                    </ul>

                </div>
            </div>
            <footer>
                <?php include 'footer.php'; ?>
            </footer>
                
    </body>
</html>