<?php
    
    $pdo=new PDO ("mysql:host=localhost;dbname=AdoptMe;charset=utf8","root","");
    $resultado=$pdo->query("SELECT * FROM mascotas WHERE id_masc='$id' ");
    $fila=$resultado->fetch();
 
?>
<?php  
    # Validar que el usuario venga a través de un POST
    if($_SERVER["REQUEST_METHOD"] != "POST") {
        header("Location: adoptYa.php") ;
    }
    
    #Validar que los campos estén escritos
    if($_POST["nombre"] == "" ||$_POST["apellido"] == ""||$_POST["direccion"] == ""||$_POST["distrito"] == "" 
        ||$_POST["celular"] == ""||$_POST["telefono"] == ""||$_POST["fechaNacimiento"] == ""||$_POST["dni"] == ""
        ||$_POST["correo"] == ""||$_POST["estadoCivil"] == ""||$_POST["ocupacion"] == ""||$_POST["centroET"] == ""
        ||$_POST["tos"] == "") {
        header("Location: adoptYa.php?error=faltancampos");
        exit;
    }
?>

<?php
# Paso 1: Leer datos de $_POST
$idMascota=$_POST['idMascota'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$distrito=$_POST['distrito'];
$celular=$_POST['celular'];
$telefono=$_POST['telefono'];
$fechaNacimiento=$_POST['fechaNacimiento'];
$dni=$_POST['dni'];
$correo=$_POST['correo'];
$estadoCivil=$_POST['estadoCivil'];
$ocupacion=$_POST['ocupacion'];
$centroET=$_POST['centroET'];

# Paso 2: Instanciar PDO
$pdo = new PDO("mysql:host=localhost;dbname=adoptme;charset=utf8","root",""); 

# Paso 3: Construir comando:
$sql = "INSERT INTO postulante values (NULL, 'idMascota','$nombre', '$apellido','$direccion','$distrito','$celular',
         '$telefono','$fechaNacimiento','$dni','$correo','$estadoCivil', '$ocupacion', '$centroET')" ;

# Paso 4: Ejecutar comando
$pdo->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/hojaContacto.css">
    <style> 
        html { 
            background-image: url(imagenes/adoptYa.jpg);
            background-size: 100vw 100vh;
            background-attachment: fixed;
            margin: 0;
        }
    </style>
</head>
<body>
    <?php echo $_POST["idMascota"] ?>
    <p>Estimado <?php echo $_POST["nombre"] ?> <?php echo $_POST["apellido"] ?> hemos recibido su ficha de postulación a adopción. </p>
    <p>Nos comunicaremos con usted mediante su correo: <?php echo $_POST["correo"] ?> </p>
    <p>Gracias por postular. </p>
</body>
</html>