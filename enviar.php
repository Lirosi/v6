<?php
 $destino="programacionlirosi@gmail.com";
 $nombre= $_POST["nombre"];
 $correo= $_POST["mail"];
 $mensaje= $_POST["mensaje"];
 $contenido="Nombre: " .$nombre. "\nCorreo:" . \$email . "\nMensaje:" . $mensaje;
 mail($destino, "contacto", $contenido);
 ?>