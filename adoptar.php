<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" a href="estilos/hojaAdoptar.css">

</head>
<body>
<?php include 'cabecera.php'?>
<h1>¡AdoptMe al rescate!</h1>
<div class="seleccion">
    <h2>¡Encuentra a tu compañero ideal!</h2>
    <form action="procesar.php" method="POST">
        <div>
        <input type="text" name="sexo" placeholder="Sexo"> 
       
        
        <input type="text" name="tamaño" placeholder="Tamaño"> 
        
        
        <input type="text" name="em" placeholder="Edad aprox"> 
        
        
        <input type="text" name="na" placeholder="Nivel de Actividad"> 
        
        <input type="text" name="er" placeholder="Espacio requerido"> 
        
        
        <input type="text" name="condi" placeholder="Puede estar solo"> 
        </div>


        <input type="submit" value="Buscar">


    </form>

</div>

<div class="conte_padre">

    <div class="hijo a">

    <button class="btn">Conóceme</button>
   </div> 

    <div class="hijo b">
    <button class="btn">Conóceme</button>
    </div>

    <div class="hijo c">
    <button class="btn">Conóceme</button>
    </div>

    <div class="hijo d">
    <button class="btn">Conóceme</button>
    </div>

    <div class="hijo e">
    <button class="btn">Conóceme</button>
    </div>

    <div class="hijo f">
    <button class="btn">Conóceme</button>
    </div>

    <div class="hijo g">
    <button class="btn">Conóceme</button>
    </div>

    <div class="hijo h">
    <button class="btn">Conóceme</button>
    </div>

    <div class="hijo i">
    <button class="btn">Conóceme</button>
    </div>
    

</div>

<?php include 'pie.php'?>

    
</body>
</html>