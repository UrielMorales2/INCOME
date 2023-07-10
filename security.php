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
                        <li class="menu_list"><a href="index.html" class="menu_link">Inicio</a></li>
                        <li class="menu_list"><a href="#" class="menu_link">Nosotros</a>
                            <ul class="submenu activo">
                                <a href="abaut.php" class="submenu_link"><li class="submenu_list">Acerca De Income</li></a>
                                <a href="equipoment.php" class="submenu_link"><li class="submenu_list">Equipos e Instalaciones</li></a>
                                <a href="security.php" class="submenu_link"><li class="submenu_list">Seguridad</li></a>
                                <a href="ethics.php" class="submenu_link"><li class="submenu_list">Etica</li></a>
                            </ul>
                        </li>
                        <li class="menu_list"><a href="servicios.html" class="menu_link">Servicios</a>
                            
                        </li>
                        <!-- <li class="menu_list aviso"><a href="servicios.html" class="menu_link">Aviso de Privacidad</a></li> -->
                        <li class="menu_list"><a href="contacto.html" class="menu_link">contacto</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- <nav class="main-nav">
        <div class="container container--flex">
            <span class="fa-solid fa-bars" id="btnmenu"></span>
            <ul class="menu" id="menu">
                
                <li class="menu__item"><a href="index.html" class="menu__link ">INICIO</a></li>
                <li class="menu__item"><a href="index.html#section1" class="menu__link">NOSOTROS</a></li>
                <li class="menu__item submenu"><a href="servicios.html"    class="menu__link menu__link--select">SERVICIOS</a> </li>
                <li class="menu__item"><a href="contacto.html" class="menu__link">CONTACTO</a></li>
            </ul>
        </div>
    </nav> -->
    <section class="zona2" style="background-image: url('img/render.jpg')">
        <div class="banner__content">SEGURIDAD</div>
    </section>




    <section class="contenedorEquipoment">
        <div class="infoEquipoment">
            <div class="List">
                <div class="seccservice_titlee"> 0 INCIDENCIAS DE ROBO <br>
                    0 ACTOS DE INTERFERENCIA ILÍCITA
                </div>
                <p class="txtEquipoment">Sistema de Circuito Cerrado de Televisión.</p>
                <li>78 cámaras de vigilancia</li>
                <li>Grabación 24/7</li>
                <li>Resguardo de imagen por 60 días en HD</li>
                <li>Personal certificado y altamente capacitado</li>
                <p class="txtEquipoment">Contamos con la Aprobación por parte de la Autoridad Aeronáutica Nacional de un Programa de Seguridad para la Prevención de Actos de Interferencia Ilícita y su Programa de Capacitación correspondiente.</p>
            </div>
            <div class="containerimg ab">
                <img src="img/aa.jpg" alt="" class="imgEquipoment">
            </div>
        </div> 

        <div class="infoEquipoment">
            <div class="containerimg">
                <img src="img/equipos.jpg" alt="" class="imgEquipoment">
            </div>
            <div class="List">
                <div class="seccservice_titlee"> EQUIPOS DE ÚLTIMA GENERACIÓN. NUEVOS, VALIDADOS Y APROBADOS POR LA AUTORIDAD AERONÁUTICA NACIONAL, ESTADOUNIDENSE Y EUROPEA</div>
                <li>Equipo de Rayos X Double View</li>
                <li>Equipo Detector de Explosivos con Trazas</li>
                <li>Equipo Pórtico detector de Metales</li>
                <li>Equipo Detector de Metales Portátil</li>
                <li>Personal certificado y altamente capacitado</li>
                <li>Identificación por credencial RFID.</li>
            </div>
        </div> 
    </section>
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