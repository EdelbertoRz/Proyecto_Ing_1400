<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="PROYECTO_ING";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 //recuperar las variables
 $nombre=$_POST['Nombre'];
 $correo=$_POST['Correo'];
 $mensaje=$_POST['Mensaje'];
 
 //hacemos la sentencia de sql
  $sql="INSERT INTO contactanos VALUES('$nombre',
           '$correo',
           '$mensaje')";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);
 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='Menu.html'>Volver</a>";
 }
?>