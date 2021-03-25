<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
<?php

$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$numero = $_POST['numero'];
$publicacion = $_POST['publicacion'];
$editorial = $_POST['editorial'];
$año = $_POST['año'];
$pagina = $_POST['pagina'];
$notas = $_POST['notas'];
$isbn = $_POST['isbn'];



echo "Autor: ", $autor;
echo "<br>";
echo "Titulo del Libro: ", $titulo;
echo "<br>";
echo "Numero de Edicion: ", $numero;
echo "<br>";
echo "Lugar de publicacion: ", $publicacion;
echo "<br>";
echo "Editorial: ", $editorial;
echo "<br>";
echo "Año de Edicion: ", $año;
echo "<br>";
echo "Numero de Paginas: ", $pagina;
echo "<br>";
echo "Notas: ", $notas;
echo "<br>";
echo "ISBN: ", $isbn;

?>
<br>
<a href="Biblioteca.php" class="a-btn">
<span class="a-btn-text">Ingresar</span>
<span class="a-btn-slide-text">Nuevo Libro </span>

</body>
</html>