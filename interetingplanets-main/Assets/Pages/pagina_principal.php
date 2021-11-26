<?php include ("../../db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interesting Planets</title>
    <script src="https://kit.fontawesome.com/719a26b655.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Css/Styles.css">
</head>
<body >
    <!--Video inicial -->
    <div class="video_inicial" id="video_inicial">
        <video class="video" autoplay="autoplay" muted defaultMuted playsinline  oncontextmenu="return false;"  preload="auto"  id="miVideo">
            <source src="../Img/big bang2.mp4" >
            </video>
            <button class="cerrar" onclick="video1()">
                <i class="fas fa-times"></i>
            </button>
    </div>
    <!--Fin de video inicial-->
    <div class="body">
         <header>
            <nav class="navegacion">
                <ul class="menu" >
                    <li class="ip" id="mouse_encima"><a href="pagina_principal.html">Interesting Planets</a> </li>
                    <li id="mouse_encima"><i class="fas fa-globe-americas"></i> Planetas
                        <ul class="submenu">
                            <li>
                                <a href=" Mercurio.html">Mercurio</a>
                            </li>
                            <li>
                                <a href=" venus.html">Venus</a>
                            </li>
                            <li>
                                <a href=" tierra.html">Tierra</a>
                            </li>
                            <li>
                                <a href=" marte.html">Marte</a>
                            </li>
                            <li>
                                <a href=" jupiter.html">Jupiter</a>
                            </li>
                            <li>
                                <a href=" saturno.html">Saturno</a>
                            </li>
                            <li>
                                <a href=" neptuno.html">Neptuno</a>
                            </li>
                            <li>
                                <a href=" urano.html">Urano</a>
                            </li>
                            <li>
                                <a href=" pluton.html">Pluton</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li id="mouse_encima">
                        <a href="extras.html">Extras</a>
                    </li>
                    
            
                    <li id="mouse_encima"><a href="../../index.php">Salir</a></li>
                    <button class="boton" onclick="dark()" id="boton">
                        <div class="iconos">
                            <i class="fas fa-toggle-on"></i> 
                            
                         </div>
                    </button>
                </ul>


            </nav>
        </header>
    <div class="fondo">
    
            <video class="video" autoplay="autoplay" loop="loop" muted defaultMuted playsinline  oncontextmenu="return false;"  preload="auto"  id="miVideo">
                <source src="../Img/Interesti_p.mp4" >
                </video>
    
                
    </div>

    <div class="transparencia"></div>
        <div class="contenido">

        
        <h1 class="usuario"><?php if (isset($_SESSION['a'])) { ?>
                        
                        <?= $_SESSION['a']?>
                        
         <?php session_unset(); } ?></h1>
        <h1 class="fondo_h1">¿Cómo se originó el Universo?</h1>
        <br>
        <p>

            Lo que acabáis de ver, es una pequeña animación sobre la teoría más apoyada por los científicos, un cataclismo cósmico sin igual en la historia: el Big Bang. Esta teoría surgió de la observación del alejamiento a gran velocidad de otras galaxias respecto a la nuestra en todas direcciones, como si hubieran sido repelidas por una antigua fuerza explosiva.<br><br>
            Antes del Big Bang, según los científicos, la inmensidad del universo observable, incluida toda su materia y radiación, estaba comprimida en una masa densa y caliente a tan solo unos pocos milímetros de distancia. Este estado casi incomprensible se especula que existió tan sólo una fracción del primer segundo de tiempo.<br><br>
            Los defensores del Big Bang sugieren que hace unos 10 000 o 20 000 millones de años, una onda expansiva masiva permitió que toda la energía y materia conocidas del universo (incluso el espacio y el tiempo) surgieran a partir de algún tipo de energía desconocido.<br><br>
            La teoría mantiene que, en un instante (una trillonésima parte de un segundo) tras el Big Bang, el universo se expandió con una velocidad incomprensible desde su origen del tamaño de un guijarro a un alcance astronómico. La expansión aparentemente ha continuado, pero mucho más despacio, durante los siguientes miles de millones de años
            
            </p>
            <br>

            <h2>Nuestro sistema solar </h2>
            <br>
            <p>Ahora vamos a un lugar mas cercano tanto en tiempo como espacio, El Sistema Solar es un conjunto formado por el Sol y los ocho planetas que giran a su alrededor. De los ocho planetas, uno es donde vivimos: la Tierra.
                Además de estos elementos hay otros cuerpos celestes que también orbitan alrededor de la gran estrella solar, como los satélites de cada planeta, los cometas o los asteroides.
                </p>
                <br>
            <h2>¿Dónde está el Sistema Solar?</h2>
            <br>
            <p>En el universo hay millones de galaxias. Una de ellas es la que conocemos como Vía Láctea.
                La Vía Láctea, formada por estrellas, polvo y gas, tiene forma de espiral. Podría decirse que su aspecto es algo así como un remolino con varios brazos; pues bien, en uno de ellos, el llamado brazo de Orión, se encuentra el Sistema Solar.
                </p>    


    </div>

    </div>
    



    <script src="../Js/main.js"></script>
    
    </body>
</html>