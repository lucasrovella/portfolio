<?php 

    $nombre = $_POST["input-nombre"];
    $email = $_POST["input-email"];
    $mensaje = $_POST["input-texto"];
    $asunto = "Portfolio: Consulta de " . $nombre;
    $destino = "lucasrovella323@gmail.com";

    $header = "From: " . $nombre . "<" . $email . ">";

    $enviado = mail($destino, $asunto, $mensaje, $header);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="Stylesheet" type="text/css" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<header>
        <button class="abrir-menu" id="abrir"><i class='bx bx-list-ul' ></i></button>
        <nav class="nav" id="nav">
            <ul class="nav-list">
                <button class="cerrar-menu" id="cerrar"><i class='bx bx-x'></i></button>
                <a href="index.html#about-me">
                    <li>
                    <i class='bx bx-user'></i>Acerca de mi
                    </li>
                </a>
                
                <a href="index.html#proyectos">
                    <li>
                    <i class='bx bx-briefcase'></i>Proyectos
                    </li>
                </a>
                
                <a href="index.html#habilidades">
                    <li>
                        <i class='bx bx-folder-open' ></i>Habilidades
                    </li>
                </a>
                
                <a href="index.html#contacto">
                    <li>
                        <i class='bx bx-envelope'></i>Contacto
                    </li>
                </a>
                
                <a target="_blank" href="./files/Curriculum - Rovella Lucas Adrian.pdf">
                    <li>
                        <i class='bx bx-spreadsheet'></i>CV
                    </li>
                </a>
            </ul>
        </nav>
    </header>

    <main>
        <section id="respuesta"  name="respuesta">
            <h1> ¡Muchas gracias <?php $nombre ?> por realizar tu consulta!</h1>
            <p> 
                Dentro de breve me pondre en contacto con vos.
            </p>
            
        </section>

        
        <footer>
            <div class="links-redes">
                <a href="https://www.linkedin.com/in/lucas-adrian-rovella-7057b7130" target="_blank"><img class="redes" id="linkedin-lucas" name="linkedin-lucas" src="./assets/linkedin.svg"></a>
                
                <a href="https://github.com/lucasrovella" target="_blank"><img class="redes" id="github-lucas" name="github-lucas" src="./assets/github.svg"></a>             
    
                <a href="https://wa.me/1160103012/?text=Hola!%20Vengo%20desde%20tu%20portfolio" target="_blank"><img  class="redes" id="wpp-lucas" src="./assets/whatsapp-svgrepo-com.svg"></a>
            </div>
        </footer>

    </main>

    <script src="./script.js">

    </script>
</body>
</html>