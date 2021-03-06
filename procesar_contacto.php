<?php  
    # Validar que el usuario venga a través de un POST
    if($_SERVER["REQUEST_METHOD"] != "POST") {
        header("Location: contacto.php") ;
    }
    
    #Validar que los campos estén escritos
    if($_POST["nombre"] == "" ||$_POST["apellido"] == ""||$_POST["correo"] == "" ||$_POST["asunto"] == ""||$_POST["mensaje"] == ""||$_POST["tos"] == "") {
        header("Location: contacto.php?error=faltancampos");
        exit;
    }
?>

<?php
# Paso 1: Leer datos de $_POST
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

# Paso 2: Instanciar PDO
$pdo = new PDO("mysql:host=localhost;dbname=adoptme;charset=utf8","root",""); 

# Paso 3: Construir comando:
$sql = "INSERT INTO contacto values (NULL, '$nombre', '$apellido', '$correo', '$asunto', '$mensaje')" ;

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
        background: url(imagenes/animalesDomesticos.jpg) no-repeat center fixed; 
        background-size: cover;
        }
    </style>
</head>
<body>
    <div>
        <img src="imagenes/contacto.png" alt="">
    </div>
    
    <h1>Asunto: <?php echo $_POST["asunto"] ?> </h1>

    <p>Estimado <?php echo $_POST["nombre"] ?> <?php echo $_POST["apellido"] ?> hemos recibido su mensaje: "<?php echo $_POST["mensaje"] ?>". </p>
    <p>En breve, le enviaremos una respuesta a su correo <?php echo $_POST["correo"] ?> </p>

</body>
</html>