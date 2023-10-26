<?php
//generar la conexion con la base de datos
//$conexion es una variable
$conexion = mysqli_connect("localhost", "root", "", "login_register_db");
//indique la conectividad sea exitosa
if($conexion){
   echo 'Conertarse exitosamente a la base de datos'; 
}else{
    echo'No se a popido conectar con la base de datos';
}
?>