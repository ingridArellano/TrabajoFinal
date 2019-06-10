<?php
$sexo=$_POST["sexo"];
$tamaño=$_POST["tamaño"];
$edad_masc=$_POST["em"];
$nivel_act=$_POST["na"];
$espacio_re=$_POST["er"];
$tiempo_solo=$_POST["ts"];

$pdo = new PDO("mysql:host=localhost;dbname=AdoptMe;charset=utf8","root","");
?>


<div class="conte_padre">

    <?php
    foreach ($pdo->query("SELECT * FROM mascotas where sexo_masc='$sexo'") as $fila)
    {
    ?>
            <div class="hijo a">
            <img class="imagen-cuadro" src="http://cdn.lavozdesanjusto.com.ar/Imagenes/1200Image1534794eb6f149ba9ed94d6fa86fd45b.jpg" alt="">
                <?php echo $fila["nombre_masc"] ?>/
                <?php echo $fila["sexo_masc"] ?>/
                <?php echo $fila["edad_masc"] ?>
                <a class="prueba" href="login.php?id=<?php echo $fila["id_masc"]?>">Conoceme</a>
            </div> 

     <?php } ?>

</div>
