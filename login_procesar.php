
<?php
#Lectura de los parametros del formulario

$usuario=$_POST["u"];
$password=$_POST["p"];


$pdo=new PDO ("mysql:host=localhost;dbname=adoptme;charset=utf8","root","");

$resultado=$pdo->query("SELECT * FROM postulante WHERE usuarioNick='$usuario' and contraseñaNick= '$password'");
$filas=$resultado->fetchAll();


$result=$pdo->query("SELECT id_usuario FROM postulante WHERE usuarioNick='$usuario' and contraseñaNick= '$password'");
$fila=$result->fetch();

if(count($filas) ==1) {
    #Usuario correcto
    #Guardar el resultado de la validacion SESSION
    session_start(); #Lee el session ID. eN CASO NO EXISTA LO CREA
    $_SESSION["usuario"]=$usuario;
    $_SESSION["id_usuario"]=$fila["id_usuario"];
    #Redirigir al index.php
    header("Location: adoptar.php");
}
else{
    #Usuario incorrecto
    header("Location: login.php?m=1");
}
?>
