<?php 

    $nombre = $_POST["input-nombre"];
    $email = $_POST["input-email"];
    $mensaje = $_POST["input-texto"];
    $asunto = "Portfolio: Consulta de " . $nombre;
    $destino = "lucasrovella323@gmail.com";

    $header = "From: " . $nombre . "<" . $email . ">";

    $enviado = mail($destino, $asunto, $mensaje, $header);


?>