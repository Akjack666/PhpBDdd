

<?php

include("variables.php");
$con = mysqli_connect ($host, $user, $pass, $db_name,$port) or die('Not connected : Ah sh*t ' . mysqli_connect_error());

$consulta = "SELECT mail FROM  usuarios  ORDER BY RAND() LIMIT 1; ";
$resultado = mysqli_query($con, $consulta);

$consulta2= "SELECT mail FROM  usuarios ";
$resultado2 = mysqli_query($con, $consulta2);


?>




<html>




<h1>El ganador es:</h1>
<?php
while($fila = mysqli_fetch_array($resultado)){
    extract($fila);
    echo "$mail";
}
?>

<h2>Todos los usuarios:</h2>

<?php

echo "<table border='1'>";
    echo "<tr><td>Usuario</td></tr>";
while($fila2 = mysqli_fetch_array($resultado2)){
    extract($fila2);
    echo "<tr><td>$mail</td><tr/>";
}
?>

</html>