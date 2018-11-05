<html>

<head>

<link rel="stylesheet" type="text/css" href="styles.css"> 

<title>Prueba departamento informática</title>

</head>

<body>

<header>
    <img src="img/imagen-home.jpg" alt="">
</header>

<div class="general">

<p> <b> Para participar solo tienes solo tienes que responder a estas sencillas preguntas y pulsar el boton enviar.</b> El nomnbre de los dos ganadores se comunicara en la cena patrocinada por schindler el dia 27 de mayo en la finca las calabacicas.</p>

<h4>Participa</h4>


   

<form method='post' action="enviar.php">
    <div class="bloque">

     Nombre: <input type='text' name='nombre'/><br/>
     <br/>
     Mail: <input id="caja" type='text' name='mail'/><br/>

<p>A cuantas comunidades de vecinos das servicio ?</p>
<select name="comunidades">
   <option value="1">1</option> 
   <option value="2">2</option> 
   <option value="3">3</option>
   <option value="4">4</option> 
   <option value="5">5</option> 
   <option value="mas">más de 5</option> 
</select>
</div>

<div class="bloque">

<p> <b>Si ya trabajas con Schindler en el sector residencial:</b> </p>

<p>Estas dado de alta en la comunidad Schindler?</p>

<input type="radio" name="alta" value="Si"> Si
<input type="radio" name="alta" value="No" > No

<p>Te gustaria?</p>

<input type="radio" name="quererAlta" value="Si"> Si
<input type="radio" name="quererAlta" value="No" > No

</div>

<div class="bloque">

<p>Quieres recibir publicidad sobre los descuentos y ventajas de nuestra comunidad?</p>

<input type="radio" name="publicidad" value="Si"> Si
<input type="radio" name="publicidad" value="No" > No

</div>

<div class="enviar">
<input type="radio" name="terminos" value="Si"> He leido y acepto las bases legales.

<input type="submit" name="Submit" value="Enviar" class="boton" />

<footer>&copy; Schindler 2017</footer>

</div>

</div>

</form>





</body>



</html>


