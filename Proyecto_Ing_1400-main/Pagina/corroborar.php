<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="proyecto_ing";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 //recuperar las variables
    $user = $_POST["user"];
    $password = $_POST["password"];
 
    //hacemos la sentencia de sql
  $sql="SELECT tipo_usuario FROM usuarios WHERE $user='nombre_usuario' and $password='passwd'";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);
 //verificamos la ejecucion
 if(!$ejecutar){
  echo $ejecutar;
 }else{
  echo"Los datos no existen";
 }
?>