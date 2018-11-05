<?php


include("variables.php");

//$con = mysqli_connect($host, $user, $pass, $db_name,$port);

$con = mysqli_connect ($host, $user, $pass, $db_name,$port) or die('Not connected : Ah sh*t ' . mysqli_connect_error());

$nombre=$_POST['nombre'];
$mail=$_POST['mail'];
$comunidades=$_POST['comunidades'];
$alta=$_POST['alta'];
$quererAlta=$_POST['quererAlta'];
$publicidad=$_POST['publicidad'];
$terminos=$_POST['terminos'];


if(!empty($nombre) && !empty($mail) && isset($terminos)){

    if(isset($alta) || isset($quererAlta) || isset($publicidad)){

        $consulta = "insert into Usuarios values('$mail','$nombre', now())";
$resultado = mysqli_query($con, $consulta);

$consulta2 = "insert into Respuestas values(null,'$comunidades','$alta','$quererAlta','$publicidad', now(),'$mail')";
$resultado = mysqli_query($con, $consulta2);


mysqli_close($con);
echo"<script>alert('Registro realizado correctamente')</script>";
  header( "refresh:0;index.php" );

    }else{

        echo"<script>alert('Debes elejir una respuesta como minimo')</script>";
  header( "refresh:0;index.php" );

    }


}else{
  echo"<script>alert('Debes introducir tus datos, aceptar los terminos')</script>";
  header( "refresh:0;index.php" );
}


 ?>