<?php
#validar que el usuario venga atraves de un POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: doyenadopcion.php");
    exit;
}

#validar que existan los tres parametros dentro de &_POST
if (!isset($_POST["nombres"]) || !isset($_POST["apellidos"]) || !isset($_POST["correo"]) || !isset($_POST["sexo"]) || !isset($_POST["fechadenacimiento"]) || !isset($_POST["distrito"]) || !isset($_POST["celular"])) {
    header("Location: doyenadopcion.php");
    exit;
}
if (!isset($_POST["nombre_masc"]) || !isset($_POST["tamaño_masc"]) || !isset($_POST["edad_masc"]) || !isset($_POST["descripcion"]) || !isset($_POST["raza_masc"]) || !isset($_POST["tipo_masc"]) || !isset($_POST["vacunas"]) || !isset($_POST["estado"]) || !isset($_POST["espacio_req"]) || !isset($_POST["nivel_act"]) || !isset($_POST["peso_masc"]) || !isset($_POST["tamaño_masc"]) || !isset($_POST["tiempo_solo"])) {
    header("Location: doyenadopcion.php");
    exit;
}
#validar que los campos estan escritos
if ($_POST["nombres"] == "" || $_POST["apellidos"] == "" || $_POST["correo"] == "" || $_POST["sexo"] == "" || $_POST["fechadenacimiento"] == "" || $_POST["distrito"] == "" || $_POST["celular"] == "") {
    header("Location: doyenadopcion.php?error=campos1");
    exit;
}


#validar que los campos estan escritos
if ($_POST["nombre_masc"] == "" || $_POST["sexo_masc"] == "" || $_POST["edad_masc"] == "" || $_POST["descripcion"] == "" || $_POST["raza_masc"] == "" || $_POST["tipo_masc"] == "" || $_POST["vacunas"] == "" || $_POST["estado"] == "" || $_POST["espacio_req"] == "" || $_POST["nivel_act"] == "" || $_POST["peso_masc"] == "" || $_POST["tamaño_masc"] == "" || $_POST["tiempo_solo"] == "") {
    header("Location: doyenadopcion.php?error=campos2");
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
$descripcion = $_POST['descripcion'];
$raza_masc = $_POST['raza_masc'];
$tipo_masc = $_POST['tipo_masc'];
$vacunas = $_POST['vacunas'];
$estado = $_POST['estado'];
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
$sql = "INSERT INTO mascotas values (NULL, '$nombre_masc', '$sexo_masc', '$edad_masc', '$descripcion', '$raza_masc', '$tipo_masc',  '$vacunas','$estado', '$espacio_req', '$nivel_act', '$peso_masc', '$tamaño_masc',  '$tiempo_solo')";

# Paso 4: Ejecutar comando
$pdo->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FROMULARIO CONTACTO</title>
    <link rel="stylesheet" href="procesar_adopcion.css">
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