<?php
session_start(); #Esta funcion debe ser llamada antes de un output

?>
<?php
$pdo=new PDO ("mysql:host=localhost;dbname=AdoptMe;charset=utf8","root","");
$where="";

if (isset($_POST["buscar"])){

    $sexo=$_POST["sexo_masc"];
    $tamaño=$_POST["tamaño_masc"];
    $peso=$_POST["peso_masc"];

    if ( $_POST["sexo_masc"] =="" and $_POST["peso_masc"] =="" and $_POST["tamaño_masc"] ==""  ) {
	    $where="WHERE tamaño_masc= 'mediano' and sexo_masc='hembra' and peso_masc= 1";
    }
    else if ( $_POST["sexo_masc"] =="" and $_POST["peso_masc"] =="" ) {
		  $where="WHERE tamaño_masc='$tamaño'";
	  }
    else if ( $_POST["tamaño_masc"] =="" and $_POST["peso_masc"] =="" ) {
		  $where="WHERE sexo_masc='$sexo'";
	  }

	  else if ( $_POST["sexo_masc"] =="" and $_POST["tamaño_masc"] =="") {
		  $where="WHERE peso_masc='$peso'";
    } 

	  else if ( $_POST["sexo_masc"] =="" )	{
		  $where="WHERE tamaño_masc='$tamaño' and peso_masc='$peso'";
    }
    else if ( $_POST["tamaño_masc"] =="")	{
		  $where="WHERE sexo_masc='$sexo' and peso_masc='$peso'";
    }
    else if ( $_POST["peso_masc"] =="" )	{
	  	$where="WHERE sexo_masc='$sexo' and tamaño_masc='$tamaño'";
    }
    else{
      $where="WHERE tamaño_masc= '$tamaño' and sexo_masc='$sexo' and peso_masc= '$peso' ";
    }
        
        
}


$mascotas="SELECT * FROM mascotas $where";
$resMascota=$pdo->query($mascotas);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" a href="hojaAdoptar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

</head>
<body>
<?php include 'cabecera.php'?>
<h1>¡AdoptMe al rescate!</h1>
<div class="seleccion">
    <h2>¡Encuentra a tu compañero ideal!</h2>
    <div class="menu">

      <form method="POST">
      
          <select name="sexo_masc" id="sexo">
              <option value="">Sexo</option>
              <option value="hembra">Hembra</option>
              <option value="macho">Macho</option>
              
          </select>
        
          <select name="tamaño_masc" id="tamaño">
              <option value="">Tamaño</option>
              <option value="pequeño">Pequeño</option>
              <option value="mediano">Mediano</option>
              <option value="grande">Grande</option>
          </select>
        
          <select name="peso_masc" id="peso">
              <option value="">Peso</option>
              <option value="1">+1</option>
              <option value="2">+2</option>
              <option value="3">+3</option>
          </select>

               
                
          <button name="buscar" type="submit">Buscar</button>
    </div>
    </form>

</div>
<br>

<div class="conte_padre">
    <?php 

    
    while ($registroMascota = $resMascota->fetch()){
    ?>

        <div class="hijo">

        <img class="imagen-cuadro"  src="<?php echo $registroMascota["imagen"]?>">
        <p style="color:black">Nombre: <?php echo $registroMascota["nombre_masc"] ?></p>
        <p style="color:black">Tipo: <?php echo $registroMascota["tipo_masc"] ?></p>
        <p style="color:black">Estado: <?php echo $registroMascota["estado"] ?></p>
        <a class="prueba" href="perfil.php?id=<?php echo $registroMascota["id_masc"]?>">Conoceme</a>
        </div> 

        
    <?php
    }
    ?>
 </div>
 <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>
<?php include 'pie.php'?>
</body>
</html>