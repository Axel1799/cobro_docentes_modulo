<?php

$mysqli = new mysqli("localhost", "root", "", "cobros_docentes");
$mysqli->set_charset("utf8");
/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

?>
