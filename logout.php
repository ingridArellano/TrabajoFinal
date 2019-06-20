
<?php
session_start(); #Lee el SID
session_destroy(); #Borrar datos de sesión para este usuario

header("Location: adoptar.php");

?>