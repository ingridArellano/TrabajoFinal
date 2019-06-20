<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: doyenadopcion.php");
}

if (
    $_POST["nombre_masc"] == "" || $_POST["sexo_masc"] == "" || $_POST["tamaño_masc"] == ""
    || $_POST["peso_masc"] == "" || $_POST["edad_masc"] == "" || $_POST["nivel_act"] == ""
    || $_POST["espacio_req"] == "" || $_POST["tiempo_solo"] == ""
    || $_POST["estado"] == "" || $_POST["tipo_masc"] == ""
) {
    header("Location: doyenadopcion.php?error=campos");
    exit;
}
?>

<?php
$dir = "img/";
$nombre_archivo = $_FILES['imagen']['name'];

if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $dir . $nombre_archivo)) {
    echo "Error en la subida de archivos";
    exit;
}
?>

<?php
$nombre_masc = $_POST['nombre_masc'];
$sexo_masc = $_POST['sexo_masc'];
$tamaño_masc = $_POST['tamaño_masc'];
$peso_masc = $_POST['peso_masc'];
$edad_masc = $_POST['edad_masc'];
$nivel_act = $_POST['nivel_act'];
$espacio_req = $_POST['espacio_req'];
$tiempo_solo = $_POST['tiempo_solo'];
$estado = $_POST['estado'];
$tipo_masc = $_POST['tipo_masc'];

$pdo = new PDO("mysql:host=localhost;dbname=adoptme;charset=utf8", "root", "");
echo $sql = "INSERT INTO mascotas values (NULL, '$nombre_masc', '$sexo_masc', '$tamaño_masc','$peso_masc', '$edad_masc', '$nivel_act', '$espacio_req', '$tiempo_solo','$espacio', '$tipo_masc', '$dir.$nombre_archivo')";
$pdo->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="doyadopcion.css">
    <style>
        img.archivo {
            margin: 50px 520px 50px;
        }

        @media all and (max-width: 750px) {
        img.archivo{
            margin: 50px 85px -150px;
        }
    }
    </style>
    <title>DOY EN ADOPCION</title>
</head>

<body>
    <?php include 'cabecera.php'; ?>
    <div class="procesada">
        <h1>SOLICITUD PROCESADA</h1>
        <p>Hemos recibido su solicitud para dar en adopción a su <?php echo $_POST["tipo_masc"] ?></p>
        <p style="font-size:34px"><strong>"<?php echo $_POST["nombre_masc"] ?>"</strong> </p>
        <?php echo "<img class=archivo src=\"$nombre_archivo\">" ?>;
    </div>
    <?php include 'pie.php'; ?>
</body>

</html>
</body>

</html>