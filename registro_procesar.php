
<?php
#Lectura de los parametros del formulario

$usuario=$_POST["u"];
$password=$_POST["p"];


$pdo=new PDO ("mysql:host=localhost;dbname=adoptme;charset=utf8","root","");

$resultado=$pdo->query("SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña= '$password'");
$filas=$resultado->fetchAll();

if(count($filas) ==1) {
    #Usuario correcto
    #Guardar el resultado de la validacion SESSION
    session_start(); #Lee el session ID. eN CASO NO EXISTA LO CREA
    $_SESSION["usuario"]=$usuario;
    #Redirigir al index.php
    header("Location: index.php");
}
else{
    #Usuario incorrecto
    header("Location: login.php?m=1");
}
?>
