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
 $apellido=$_POST['Apellido'];
 $nombre_usuario=$_POST['Usuario'];
 $passwd=$_POST['Contraseña'];
 $conf_passwd=$_POST['Conf_Contraseña'];
 $direccion=$_POST['Direccion'];
 $ciudad=$_POST['Ciudad'];
 $telefono=$_POST['Telefono'];
 $correo=$_POST['Correo_electronico'];
 
 //hacemos la sentencia de sql
  $sql="INSERT INTO usuarios VALUES('$nombre',
           '$apellido',
           '$nombre_usuario',
           '$passwd',
           '$conf_passwd',
           '$direccion'
            '$ciudad',
           '$telefono',
           '$correo')";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);
 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='Login-as-AD.html'>Volver</a>";
 }
?>