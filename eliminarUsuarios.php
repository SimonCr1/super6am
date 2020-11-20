<?php 

//1.Incluir el archivo BaseDatos
include("Basedatos.php");





//2. Reciba el id a eliminar
$id = $_GET["id"];


//3. Crea un objeto (sacar copia) de la clase Basedatos
$transaccion = new Basedatos();

//4. Crear una consulta SQL para eliminar datos
$consultaSQL="DELETE FROM usuarios WHERE idUsuario='$id' ";

//5. Ejecutar el metodo eliminarUsuario

$transaccion->eliminarDatos($consultaSQL);

 //6. Redireccion a la vista que necesite
 header("location:listadoUsuarios.php")








?>