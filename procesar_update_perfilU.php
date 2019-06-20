<?php
#PASO1: LEER DATOS DEL $_POST
$id = $_POST["id"];
$contraseñaNick=$_POST['contraseñaNick']
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$distrito=$_POST['distrito'];
$celular=$_POST['celular'];
$fechaNacimiento=$_POST['fechaNacimiento'];
$dni=$_POST['dni'];
$correo=$_POST['correo'];
$estadoCivil=$_POST['estadoCivil'];
$ocupacion=$_POST['ocupacion'];
$centroET=$_POST['centroET'];



#PASO2: INSTANCIAR PDO

$pdo = new PDO("mysql:host=localhost;dbname=adoptme;charset=utf8","root","");

#PASO3: CONSTRUIR COMANDO INSERTAR

$sql = "UPDATE postulante SET contraseñaNick='$contraseñaNick',nombre='$nombre', apellido='$apellido',direccion='$direccion',distrito='$distrito',celular='$celular',
                              fechaNacimiento='$fechaNacimiento',dni='$dni',correo='$correo',estadoCivil='$estadoCivil', 
                              ocupacion='$ocupacion', centroET='$centroET' WHERE id='$id'" ;

#PASO4: EJECUTAR COMANDO 
$pdo->query($sql);
    header("");

?>