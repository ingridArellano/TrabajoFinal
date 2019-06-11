<?php
$pdo=new PDO ("mysql:host=localhost;dbname=AdoptMe;charset=utf8","root","");
$where="";


if (isset($_POST["buscar"])){

    $sexo=$_POST["sexo_masc"];
    $tamaño=$_POST["tamaño_masc"];
    $peso=$_POST["peso_masc"];

	if ( (!isset($_POST["sexo_masc"])) )	{
		$where="WHERE tamaño_masc='$sexo' and peso_masc='$peso'";
    }
    else if ( (!isset($_POST["tamaño_masc"])) )	{
		$where="WHERE sexo_masc='$sexo' and peso_masc='$peso'";
    }
    else if ( (!isset($_POST["peso_masc"])) )	{
		$where="WHERE sexo_masc='$sexo' and tamaño_masc='$tamaño'";
    }

    else if ( (!isset($_POST["tamaño_masc"])) and (!isset($_POST["peso_masc"])) ) {
		$where="WHERE sexo_masc='$sexo'";
	}

	else if ( (!isset($_POST["sexo_masc"])) and (!isset($_POST["tamaño_masc"])) ) {
		$where="WHERE peso_masc='$peso'";
    } 
    
	else if ( (!isset($_POST["sexo_masc"])) and (!isset($_POST["peso_masc"])) ) {
		$where="WHERE tamaño_masc='$tamaño'";
    }    
    else if ( (!isset($_POST["sexo_masc"])) and (!isset($_POST["peso_masc"])) ) {
		$where="WHERE tamaño_masc='$tamaño'";
	}     
 
    
	else
	{
		$where="WHERE tamaño_masc= '$tamaño' and sexo_masc='$sexo' and peso_masc='$peso'";
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

</head>
<body>
<?php include 'cabecera.php'?>
<h1>¡AdoptMe al rescate!</h1>
<div class="seleccion">
    <h2>¡Encuentra a tu compañero ideal!</h2>
    <form method="POST">
    <div>
        <select name="sexo_masc" id="sexo">
            <option value="">Sexo</option>
            <option value="hembra">Hembra</option>
            <option value="macho">Macho</option>
            
        </select>

       
        </div>
        <br>
        
        <div>
        <select name="tamaño_masc" id="tamaño">
            <option value="">Tamaño</option>
            <option value="pequeño">Pequeño</option>
            <option value="mediano">Mediano</option>
            <option value="grande">Grande</option>
        </select>

       
        </div>
        <br>
        <select name="peso_masc" id="peso">
            <option value="">Peso</option>
            <option value="1">+1</option>
            <option value="2">+2</option>
            <option value="3">+3</option>
        </select>

       
        </div>
        <br>
       
              
        <button name="buscar" type="submit">Buscar</button>

    </form>

</div>

<div class="conte_padre">
    <?php 
    while ($registroMascota = $resMascota->fetch()){
    ?>

        <div class="hijo a">

        <img class="imagen-cuadro" src="http://cdn.lavozdesanjusto.com.ar/Imagenes/1200Image1534794eb6f149ba9ed94d6fa86fd45b.jpg" alt="">
        <p><?php echo $registroMascota["nombre_masc"] ?></p>
        <a class="prueba" href="perfil.php?id=<?php echo $registroMascota["id_masc"]?>">Conoceme</a>
        </div> 

        
    <?php
    }
    ?>
 </div>
<?php include 'pie.php'?>
</body>
</html>