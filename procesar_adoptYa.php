<?php 
session_start(); #Esta funcion debe ser llamada antes de un output
if(isset($_SESSION["usuario"])){
    $idMascota=$_GET["id"];
    header("Location: confirmar.php?id=$idMascota");
    exit;#ez
}
else{
    
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
    
    # Paso 1: Leer datos de $_POST

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
    $sql = "INSERT INTO postulante values (NULL,'$nombre', '$apellido','$direccion','$distrito','$celular',
            '$telefono','$fechaNacimiento','$dni','$correo','$estadoCivil', '$ocupacion', '$centroET')" ;

    # Paso 4: Ejecutar comando
    $pdo->query($sql);
    header("Location: login.php");


}

?>



