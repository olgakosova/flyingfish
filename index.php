<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0" />
    <title>
	 </title>
        <!--Font-->
        <link rel="stylesheet" href="https://use.typekit.net/zpz7xgi.css">
        <!--Stylesheets-->
        <link rel="stylesheet" type="text/css" href="resources/css/reset.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="resources/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <!--Javascript-->
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg nav-head">
                <div class="lines">
                    <ul class="navbar-nav" >
                        <a class="nav-link" href="/altea.html">ALTEA</a>
                        <a class="nav-link" href="/about-us.html">CONOCENOS</a>
                    </ul>
                    <div class="line-bottom line-bottom-left"></div>
                    <ul class="navbar-nav" >
                        <a class="nav-link" href="">ENG</a>
                        <a class="nav-link" href="">RUS</a>
                        <a class="nav-link" href="">ESP</a>
                    </ul>
                </div>

               <div class="line-menu"></div> 
               <a href="index.html"><div class="img-bg img" id="logo"></div></a>
               <div class="line-menu"></div> 

            <div class="lines" id="second-menu-block">
                <ul class="navbar-nav">
                    <a class="nav-link" href="/services.html">SERVICIOS</a>
                    <a class="nav-link" href="/contact.html">CONTACTO</a>
                </ul>
                <div class="line-bottom line-bottom-right"></div>
                <ul class="navbar-nav social-menu">
                    <a href="#" class="nav-link img-bg social-link" id="fb-header"></a>
                    <a href="#" class="nav-link img-bg social-link" id="insta-header"></a>
                    <a href="#" class="nav-link img-bg social-link" id="wa-header"></a>
                </ul>
            </div>       
    </nav>  
    <div class="seamusic">     
        <div class="img-bg" id="seashell"></div>
        <p class="handwritten" id="music-text">escuchar el mar</p>
   </div>   
    </header>
    <main>
    <section>
        <article class="container-fluid blue-bg" id="blue-section">
            <div class="carousel container">
                <div class="cont sunset-altea"></div>
                <div class="cont fish-silver"></div>
                <div class="cont sunset-shadow"></div>
                <div class="cont fish-orange"></div>
            </div>
            <div class="line"></div>
            <div class="quotes col-lg-5">
                <p class="quote"><span class="orange">"</span>I should not have been a fisherman, he thought. 
                    But that was the thing that I was born for <span class="orange">"</span></p>
                    <p class="handwritten" id="heminguay"> Ernest Heminguay</p>
            </div>
        </article>
    </section>

    <section class="container-fluid" id="watercolor-service">
        <h2 class="blue">SERVICIOS</h2>
        <div class="row justify-content-center" id="service-description">
                <div class="col-md-4 col-lg-3 services">
                    <div class="img-bg" id="icon-adv"></div>
                    <h4>aventura marítima</h4>
                    <p>¡Todos a bordo! Disfruta de una
                        jornada náutica. 
                    Desde un paseo turístico a 
                    diseñar tu propia aventura marítima.</p>
                    <div></div>
                    <a class="nav-link anim-line" href="">LEER MÁS</a>
                </div>
                <div class="col-md-4 col-lg-3 services">
                    <div class="img-bg" id="icon-fish"></div>
                    <h4>pesca</h4>
                    <p>¡A pescar! Tenemos todas las 
                        modalidades de pesca 
                        deportiva para principiantes
                         y expertos.</p>
                    <div></div>
                    <a class="nav-link anim-line" style="border: red solid 1px" href="">LEER MÁS</a>
                </div>
        </div>
    </section>
    <section>
        <div class="contact-form container translate-middle">
            <div class="border-white col-lg-8">
            <div class="container-white col-lg-10">
                <h2 class="gris">CONTACTO</h2>
                <form action="index.php" method="GET" id="contactForm">

                    <p id="contactFormMessage">Dejanos tu email si necesitas más información</p>
                    <ul>
                        <li>
                          <input type="text" id="name" name="user_name" placeholder="Nombre">
                        </li>
                        <li>
                          <input type="email" id="mail" name="user_mail" placeholder="Email">
                        </li>
                        <li>
                          <textarea id="msg" name="user_message"  placeholder="Mensaje"></textarea>
                        </li>
                        <li>
                           <input type="submit" id="submit" name="user_name">
                        </li>
                    </ul>    
                </form>
            </div>
        </div>
        </div>
    </section>
</main>
    <footer class="footer container-fluid beige blue-bg">
        <div class="container">
            <div id="soc-media">
                <div class="row">
                    <p>¡Síguenos en nuestras redes sociales!</p>
                </div> 
                <div class="row">
                    <a href="#" class="nav-link img-bg social-link" id="fb-footer"></a>
                    <a href="#" class="nav-link img-bg social-link" id="insta-footer"></a>
                    <a href="#" class="nav-link img-bg social-link" id="wa-footer"></a>
                </div>
            </div>
            <div id="logo-footer">
                <p>Flying Fish Tours</p>
                <p>fishing and adventure</p>
            </div>
            <div class="row copyright-footer">
                <p>© 2021 Copyright:</p> 
                <a class="anim-line nav-link" href="https://www.cleverhypelab.com">CleverHypeLab</a> 
            </div>
        </div>
    </footer>
    <!--Javascript-->
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="resources/slick/slick.min.js"></script>
<script type="text/javascript" src="resources/js/main.js"></script>
  
    </body>
</html>


<?php


if(!empty($_GET["user_mail"])){

    $user_email = $_GET["user_mail"];
    $user_message = $_GET["user_message"];

    $from = "From: Olga Kosova <olha.kosova@gmail.com>";
    $to = "olha.kosova@gmail.com";

    $subject = "Este es un mensaje enviado desde su página web del seguiente correo: " . $user_email;
    $message = "Contenido del mensaje: " . $user_message;

    mail($to,$subject,$message,$from);

    echo "<script type='text/javascript'>
            document.getElementById('contactForm').outerHTML='Tu mensaje ha sido enviado. Nos pondremos en contacto contigo en breve.';
        </script>";

}

?> 