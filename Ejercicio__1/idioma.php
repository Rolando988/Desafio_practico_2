<?php
$lenguaje= array(
    "Ingles" => array(
        'Basico' => 25,
        'Intermedio' => 15,
        'Avanzado' => 10
    ),

    "Frances" => array(
        'Basico' => 10,
        'Intermedio' => 5,
        'Avanzado' => 2
    ),
    "Aleman" => array(
        'Basico' => 8,
        'Intermedio' => 4,
        'Avanzado' => 1
    ),
    "Ruso" => array(
        'Basico' => 12,
        'Intermedio' => 8,
        'Avanzado' => 4
    ),
    "Chino Mandarin" => array(
        'Basico' => 30,
        'Intermedio' => 15,
        'Avanzado' => 10

    )
    );
    echo "<!DOCTYPE html>";
 echo "<html>";
 echo "<head>";
 echo "<title>Matriz</title>";
 echo "<meta charset=\"utf-8\" />";
 echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/boo
tstrap/4.4.1/css/bootstrap.min.css">';
 echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jque
ry.min.js"></script>';
 echo'<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/boots
trap.min.js"></script>';
 echo "</head>";
 echo "<body>";
 echo" <div class='container'>";
 echo "<header class='navbar navbar-light bg-light'>";
 echo"<a class='navbar-brand' class='d-inline-block align-top' href='#'>";
 echo "Alumnos Segun Idioma";
 echo"</a>";
 echo "</header>";
 echo "<body>";
 foreach($lenguaje as $lenguaje => $total){
 echo "<table class='table table-bordered'>";
 echo "<thead>";
 echo " <tr class='bg-secondary'>";
 echo " <th scope='col' colspan='2' class='text-center'>". $lenguaje
."</th>";
 echo " </tr>";
 echo " <tr class='bg-success'>";
 /*echo " <th scope='col'>Nombre</th>";
 echo " <th scope='col'>Nota</th>";*/
 echo " </tr>";
 echo "</thead>";
 echo "<tbody>";

 foreach($total as $nombre => $nota){
 echo " <tr>";
 echo " <td>$nombre</td>";
 echo " <td> ". $nota , ' Estudiantes' ."</td>";
 echo " </tr>";
 //Sumar la nota al acumulador de las notas
 echo " </tr>";
 
 }

/* $sumanotas /= $totalalumnos;
 echo "<tr class='bg-success' >";
 echo " <td colspan='2'>PROMEDIO: " . number_format($sumanotas,'2'
,'.',','). "</td>";*/
 echo "</tr> ";
 echo "</tbody>";
 echo "</table>";
 }
 echo"</div>";
 echo "</body>\n";
 echo "</html>\n";
?>