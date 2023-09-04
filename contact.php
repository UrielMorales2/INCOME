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
    <!-- <link rel="stylesheet" href="css/galeria.css"> -->
    <script src="https://kit.fontawesome.com/cedfbf939d.js" crossorigin="anonymous"></script>
    <title>INCOME | CONTACTO</title>
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
                    <a href="facebook.com" class="iconInfo"><h1 class="infophone"><i class="fa-solid fa-phone"></i> 951 458 13 49</h1></a>
                    <a href="" class="iconInfo"><h1 class="infoMail"><i class="fa-regular fa-envelope"></i> direccion@rf8income.com.mx</h1></a>
                </div>
                
                <div class="infoIcon">
                    
                    <a href="https://www.facebook.com/profile.php?id=61550252834135"  target="_blank"  class="iconInfo"><i class="fa-brands fa-facebook-f iconos_header"></i></a>
                    <!-- <a href="https://www.youtube.com/watch?v=9CiK8yEaKqY" target="_blank"  class="iconInfo"><i class="fa-brands fa-instagram iconos_header"></i></a>
                    <a href="https://www.youtube.com/watch?v=9CiK8yEaKqY"  target="_blank" class="iconInfo"><i class="fa-brands fa-twitter iconos_header"></i></a>
                    <a href="https://www.youtube.com/watch?v=9CiK8yEaKqY" target="_blank"  class="iconInfo"><i class="fa-brands fa-linkedin iconos_header"></i></a> -->
        
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

    <!-- <nav class="main-nav">
        <div class="container container--flex">
            <span class="fa-solid fa-bars" id="btnmenu"></span>
            <ul class="menu" id="menu">
                
                <li class="menu__item"><a href="index.html" class="menu__link ">INICIO</a></li>
                <li class="menu__item"><a href="index.html#section1" class="menu__link">NOSOTROS</a></li>
                 <li class="menu__item submenu"><a href="servicios.html"    class="menu__link ">SERVICIOS</a> </li>
                <li class="menu__item"><a href="contacto.html" class="menu__link menu__link--select">CONTACTO</a></li>
            </ul>
        </div>
    </nav> -->
    <section class="zona3" style="background-image: url('img/nosotros.jpg')">
        <div class="banner__content">CONTÁCTANOS</div>
    </section>
    <?php
        include "header.php";
    ?>
    <?php
        include "WA.php";
    ?>


    <main class="mainContacto">
        <seccion  class="group contact">
            <!-- <h2 class="group__title">Contactenos </h2> -->
            <div class="containerContacto container--flex_contacto">
                <section class="contact_info" style="background-image: url('img/rf8.jpg')">
                    <div class="contact-information columnContacto column--50Contacto">
                        <!-- <span class="fa fa-user-circle"></span> -->
                        <h3 class="column__titleContacto">INFORMACIÓN  DE CONTACTO</h3>
                        <p class="column__txtContacto">
                            <b> Horario de atención: <br></b>
                            Lunes a Viernes: 9am - 6pm <br>
                            Sábado: 9am -  1:30pm
                        </p>
                        <p class="column__txtContacto"><span class="fa-solid fa-phone"></span> Telefono: (+52) 951 654 5441</p>
                        <p class="column__txtContacto"><span class="fa-sharp fa-solid fa-envelope"></span> rf8income@tme21.com</p>
                        <p class="column__txtContacto"><span class="fa-brands  fa-facebook"></span> rf8income</p>
                        <p class="column__txtContacto"><span class="fa-solid fa-location-dot"></span> Aeropuerto Internacional Felipe Ángeles (AIFA) – Tecámac Estado de México</p>
                        <iframe class="mapita" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d240349.8952822074!2d-99.02652!3d19.735299!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6c0638444fed4586!2sAeropuerto%20Internacional%20Felipe%20%C3%81ngeles%20(AIFA)!5e0!3m2!1ses!2smx!4v1676051637651!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- <p class="column__txtContacto"><span class="icon-facebook"></span>Sintered Stone</p>
                        <p class="column__txtContacto"><span class="icon-instagram"></span>sinteredstone_</p> -->
                        <div class="social-icon">
                            <!-- <a href="https://www.facebook.com/sinteredst" class="social-icon__link"><span class="icon-facebook"></span></a>
                            <a href="https://www.instagram.com/sinteredstone_/" class="social-icon__link"><span class="icon-instagram"></span></a>
                            <a href="" class="social-icon__link"><span class="icon-mail"></span></a> -->
                        </div>
                    </div>
                </section>
                
                <form action="" class="form_contact">
                    <h2>Porque nos interesa la rapidez con la que le gusta que lo atendamos, envíenos sus datos con gusto nos ponemos en contacto con usted.</h2>
                    <div class="user_info">
                        <label class="labelContacto" for="names" id="nom">Nombres*</label>
                        <input class="inputContact" type="text" name="" id="names">
                        
                        <label class="labelContacto" for="phone" id="tel">Telefono / Celular</label>
                        <input class="inputContact" type="text" name="" id="phone">
                        
                        <label class="labelContacto" for="email" id="correo"> Correo Electronico*</label>
                        <input class="inputContact" type="text" name="" id="email">
        
                        <label class="labelContacto" class="labelContacto" for="mensaje" id="mensag">Mensaje*</label>
                        <textarea class="inputContact" name="" id="mmensaje" ></textarea>
        
                        <label for="" id="acep">
                            <input type="checkbox" id="aceptar">
                            Al recibir su información, acepta que nuestro equipo se comunique con usted para dar mejor detalle de nuestros productos y darle una atención más personalizada.*
                        </label>
                        
                        <input class="btnEnviar" type="button" value="Enviar Mensaje" name="" id="btnSend">
                    </div>
                </form>
            </div>  
        </seccion>
    </main>

  

    <!-- <div class="modalWrap">
        <div class="mensaje_modal">
            <h3 class="tect_modal">Debe de llenar estos campos</h3>
            <p class="text_D"><i class="fa-solid fa-x"></i> Ingrese su Nombre(s)</p>
            <p class="text_D"><i class="fa-solid fa-x"></i> Ingrese su Correo</p>
            <p class="text_D"><i class="fa-solid fa-x"></i> Ingrese su Mensaje</p>
            <span id="btnClose" >Cerrar</span>
        </div>
    </div> -->

    <!-- <section class="form_wrap">
        <section class="contact_info" style="background-image: url('img/rf8.jpg')">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACIÓN <br> DE CONTACTO</h2>
                <section class="info_items">
                    <p><span class="fa fa-envelope"></span>uncoreo@correo.com.mx</p>
                    <p><span class="fa fa-mobile"></span>951067946</p>
                </section>
            </section>
        </section>

        <form action="" class="form_contact subir">
            <h2>Porque nos interesa la rapidez con la que le gusta que lo atendamos, envíenos sus datos con gusto nos ponemos en contacto con usted</h2>
            <div class="user_info">
                <label class="labelContacto" for="names" id="nom">Nombres*</label>
                <input class="inputContact" type="text" name="" id="names">
                
                <label class="labelContacto" for="phone" id="tel">Telefono / Celular</label>
                <input class="inputContact" type="text" name="" id="phone">
                
                <label class="labelContacto" for="email" id="correo"> Correo Electronico*</label>
                <input class="inputContact" type="text" name="" id="email">

                <label class="labelContacto" class="labelContacto" for="mensaje" id="mensag">Mensaje*</label>
                <textarea class="inputContact" name="" id="mmensaje" ></textarea>

                <input class="btnEnviar" type="button" value="Enviar Mensaje" name="" id="btnSend">
            </div>
        </form>
    </section> -->


    <?php
    include "footer.php";
    ?>




    <script src="js/menu.js"></script>
    <!-- jQuery 1.8+ -->
    <script src="plugin/components/jQuery/jquery-1.11.3.min.js"></script>
    <!-- Plugin JS file -->
    <script src="plugin/components/moment/moment.min.js"></script>
    <script src="plugin/components/moment/moment-timezone-with-data.min.js"></script> <!-- spanish language (es) -->
    <script src="plugin/whatsapp-chat-support.js"></script>
    <script>
    $('#button-w').whatsappChatSupport({
        defaultMsg : '',
    });
    </script>

    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
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
</body>
</html>