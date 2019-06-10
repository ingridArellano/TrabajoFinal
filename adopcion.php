<?php
    $pdo=new PDO("mysql:host=localhost;dbname=AdoptMe;charset=utf8","root","");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>

<tr>
    <th>Nombre</th>
    <th>Sexo</th>
    <th>Edad</th>
    <th colspan="2">Operaciones</th>
</tr>


<?php
#PASO 2: EJECUTAR UNA SENTENCIA SQL el for each hace el fecth automaticamente (jalar), este fecth es para hallar un usuario en la base de datos
foreach ($pdo->query("SELECT * FROM mascotas") as $fila)
{
?>
    <tr>
        <td>
        <?php echo $fila["nombre_masc"] ?>
        </td>
        <td>
        <?php echo $fila["sexo_masc"] ?>
        <td>
        <?php echo $fila["edad_masc"] ?>
        </td>
        <td>
         <a href="adoptar.php?id=<?php echo $fila["id_masc"]?>">Conoceme</a>
        </td>
        <td>
         <a href="adoptar.php?id=<?php echo $fila["id_masc"]?>">BORRAR</a>
        </td>

    </tr>
            
<?php
} 
?>

</table>
</body>
</html>