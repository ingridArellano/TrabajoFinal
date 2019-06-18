
<?php

if($_POST["nombre_masc"] == "" || $_POST["sexo_masc"] == ""||$_POST["tamaño_masc"] == ""||$_POST["peso_masc"] == "" 
        ||$_POST["edad_masc"] == ""||$_POST["nivel_act"] == ""||$_POST["espacio_req"] == ""||$_POST["tiempo_solo"] == "") {
        header("Location: doyenadopcion.php?error=campos");
        exit;
    }
?>

<?php
# Paso 1: Leer datos de $_POST
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$sexo = $_POST['sexo'];
$fechadenacimiento = $_POST['fechadenacimiento'];
$distrito = $_POST['distrito'];
$celular = $_POST['celular'];

# Paso 1: Leer datos de $_POST
$nombre_masc = $_POST['nombre_masc'];
$sexo_masc = $_POST['sexo_masc'];
$edad_masc = $_POST['edad_masc'];
$espacio_req = $_POST['espacio_req'];
$nivel_act = $_POST['nivel_act'];
$peso_masc = $_POST['peso_masc'];
$tamaño_masc = $_POST['tamaño_masc'];
$tiempo_solo = $_POST['tiempo_solo'];

# Paso 2: Instanciar PDO
$pdo = new PDO("mysql:host=localhost;dbname=adoptme;charset=utf8", "root", "");

# Paso 3: Construir comando:
$sql = "INSERT INTO cliente values (NULL, '$nombres', '$apellidos', '$correo', '$sexo', '$fechadenacimiento', '$distrito',  '$celular')";
# Paso 3: Construir comando:
$sql1 = "INSERT INTO mascotas values (NULL, '$nombre_masc', '$sexo_masc', '$tamaño_masc','$peso_masc', '$edad_masc', '$nivel_act', '$espacio_req',   '$tiempo_solo')";

# Paso 4: Ejecutar comando
$pdo->query($sql);
$pdo->query($sql1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FROMULARIO CONTACTO</title>
</head>

<body>
    <?php include 'cabecera.php'; ?>

    <h1>SOLICITUD PROCESADA</h1>

    <p> Estimado <?php echo $_POST["nombres"] ?>,
        hemos recibido su solicitud de su mascota: <?php echo $_POST["nombre_masc"] ?>. </p>
    <p> En breve, le enviaremos una respuesta a su correo: <?php echo $_POST["correo"] ?> </p>

    <?php include 'pie.php'; ?>
</body>

</html>