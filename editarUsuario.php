<?php

    include("Basedatos.php");

    if (isset($_POST["botonEditar"])){   
 
        //1. recibir los datos
        $nombre=$_POST["nombreEditar"];
        
        $descripcion=$_POST["descripcionEditar"];
  
        //2. Recibir el id del usuario a editar
        $id=$_GET["id"];
        

        //3. Crea un objeto (sacar copia) de la clase Basedatos
        $transaccion = new Basedatos();

        //4. Crear una consulta SQL para eliminar datos
        $consultaSQL="UPDATE usuarios SET nombre='$nombre', descripcion ='$descripcion' WHERE  idUsuario='$id' ";

        //5. Ejecutar el metodo editarUsuario

        $transaccion->editarDatos($consultaSQL);

        //6. Redireccion a la vista que necesite
        header("location:listadoUsuarios.php");

            
               
    }

?>