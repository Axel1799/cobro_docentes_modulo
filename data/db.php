<?php

$mysqli = new mysqli("localhost", "root", "", "cobros_docentes");

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

?>