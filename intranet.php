<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugin/whatsapp-chat-support.css">
    <script src="https://kit.fontawesome.com/cedfbf939d.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/PNG" href="img/logo1.png">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/servicios.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/equipoment.css">
    <!-- <link rel="stylesheet" href="css/galeria.css"> -->
    <script src="https://kit.fontawesome.com/cedfbf939d.js" crossorigin="anonymous"></script>
    <title>INCOME | SERVICIOS</title>
</head>
<body>
    <div class="modal" id="modal">
        <div class="modal__contec">
            <img src="" alt="" class="modal__img" id="modal__img">
        </div>
        <div class="modal__boton" id="modal__boton">X</div>
    </div>
    
    <header class="menu-header">
        <div class="headerConten">

            <div class="infoHeader ">
                <div class="infoTelMail">
                    <a href="facebook.com" class="iconInfo"><h1 class="infophone"><i class="fa-solid fa-phone"></i> 9513094613</h1></a>
                    <a href="" class="iconInfo"><h1 class="infoMail"><i class="fa-regular fa-envelope"></i> admin@rf8income.com.mx</h1></a>
                </div>
                
                <div class="infoIcon">
                    
                    <a href="https://www.youtube.com/watch?v=9CiK8yEaKqY" class="iconInfo"><i class="fa-brands fa-facebook-f iconos_header"></i></a>
                    <a href="https://www.youtube.com/watch?v=9CiK8yEaKqY" class="iconInfo"><i class="fa-brands fa-instagram iconos_header"></i></a>
                    <a href="https://www.youtube.com/watch?v=9CiK8yEaKqY" class="iconInfo"><i class="fa-brands fa-twitter iconos_header"></i></a>
                    <a href="https://www.youtube.com/watch?v=9CiK8yEaKqY" class="iconInfo"><i class="fa-brands fa-linkedin iconos_header"></i></a>
        
                </div>
            </div>
            
            <div class="Contenedor_menu_grande">
                <img src="img/logo1.png" class="logo" alt="">
                <nav class="menu-nav">
                    <ul class="menu-contenedor_list">
                
                        <li class="menu_list"><a href="index.php" class="menu_link">Inicio</a></li>
                        <li class="menu_list"><a href="#" class="menu_link">Nosotros</a>
                            <ul class="submenu activo">
                                <a href="about.php" class="submenu_link"><li class="submenu_list">Acerca De Income</li></a>
                                <a href="equipment.php" class="submenu_link"><li class="submenu_list">Equipós e Instalaciones</li></a>
                                <a href="security.php" class="submenu_link"><li class="submenu_list">Seguridad</li></a>
                                <a href="ethics.php" class="submenu_link"><li class="submenu_list">Etica</li></a>
                            </ul>
                        </li>
                        <li class="menu_list"><a href="#" class="menu_link">Servicios</a>
                            <ul class="submenu activo">
                                    <a href="services.php" class="submenu_link"><li class="submenu_list">Nuestros Servicios</li></a>
                                    <a href="intranet.php" class="submenu_link"><li class="submenu_list">Intranet</li></a>
                                    
                                </ul>
                            </li>
                        <!-- <li class="menu_list aviso"><a href="servicios.html" class="menu_link">Aviso de Privacidad</a></li> -->
                        <li class="menu_list"><a href="contact.php" class="menu_link">contacto</a></li>
                    
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="zona2" style="background-image: url('img/render.jpg')">
        <div class="banner__content">INTRANET</div>
    </section>
    <?php
        include "header.php";
    ?>
    
    <div class="contenedorservice">
        <div class="seccservice_titleee"> SERVICIOS INTRANET</div>
        <div class="hola"></div>
        <div class="contenedor_iconosServices">
            <span class="iconesServiceEs"><a href="#"><i class="fa-solid fa-laptop"></i><p class="infoicono">Consulta Remota SAT</p></a></span>
            <span class="iconesServiceEs"><a href="#"><i class="fa-solid fa-user-gear"></i><p class="infoicono">Consulta Remota Clientes</p></a></span>
            <span class="iconesServiceEs"><a href="#"><i class="fa-solid fa-file-invoice"></i><p class="infoicono">Facturación electrónica (Crédito)</p></a></span>
            <span class="iconesServiceEs"><a href="#"><i class="fa-solid fa-file-invoice-dollar"></i></i><p class="infoicono">Facturación electrónica (Contado)</p></a></span>
            <span class="iconesServiceEs"><a href="#"><i class="fa-solid fa-calculator"></i><p class="infoicono">Calculadora de Servicios</p></a></span>
            <span class="iconesServiceEs"><a href="#"><i class="fa-solid fa-dolly"></i><p class="infoicono">Portal de Proveedores</p></a></span>
        </div>
        
            
    </div>
    
    <?php
        include "footer.php";
    ?>
    </body>
</html>

<script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("abajo", window.scrollY>0);
        })
        window.addEventListener("scroll", function(){
            var header = document.querySelector(".infoHeader");
            header.classList.toggle("abajo", window.scrollY>0);
        })




        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("slide");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>

    <style  type="text/css">
    
    </style>