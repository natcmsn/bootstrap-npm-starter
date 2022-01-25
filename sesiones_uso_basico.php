<?php
session_start();
if (!isset($_SESSION['count'])) {
    $_SESION['count'] = 0;
}else {
    $_SESION['count']++;
}
echo "hola " .$_SESSION['count'];
echo "<br><a href='sesiones_uso_basico2.php'>Siguiente</a>";