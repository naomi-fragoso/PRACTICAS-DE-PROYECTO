<?php //se inicia el codigo php
    
    $servidor = "localhost"; //Definición de la variable $servidor que especifica la dirección del servidor de base de datos
    $usuario = "root"; //Definición de la variable $usuario que especifica el nombre de usuario para acceder a la base de datos
    $clave = ""; //Definición de la variable $clave que especifica la contraseña para acceder a la base de datos
    $baseDeDatos = "PROYECTO DROGAS Y SALUD MENTAL (PANTALLAS)"; //// Variable que almacena el nombre de la base de datos a la que se desea conectar

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos); // Creación del enlace a la base de datos utilizando mysqli_connect()

//se termina el codigo php
?> 

<?php //se inicia el codigo php

    if(isset($_POST['enviar'])){ // Verificar si se ha enviado el formulario con el nombre del boton de html "enviar"

        // Obtener los datos enviados por el formulario y asignarlos a variables
        $nombre= $_POST ['nombre'];
        $correo= $_POST ['correo'];
        $edad= $_POST ['edad'];
        $genero= $_POST ['genero'];
        $pregunta1= $_POST ['pregunta1'];
        $pregunta2= $_POST ['pregunta2'];
        $pregunta3= $_POST ['pregunta3'];
        $pregunta4= $_POST ['pregunta4'];
        $pregunta5= $_POST ['pregunta5'];
        $pregunta6= $_POST ['pregunta6'];
        $calificacion= $_POST ['calificacion'];
        $comentario= $_POST ['comentario'];

        


        // Crear la consulta SQL para insertar los datos en la tabla "datos"
        $insertarDatos = "INSERT INTO datos1 VALUES('$nombre','$correo','$edad','$genero','$pregunta1','$pregunta2','$pregunta3','$pregunta4','$pregunta5','$pregunta6','$calificacion','$comentario','')";

        $ejecutarInsertar = mysqli_query($enlace,$insertarDatos); // Ejecutar la consulta SQL para insertar los datos en la base de datos

        header("Location: {$_SERVER['REQUEST_URI']}");exit; // Redireccionar de nuevo a la misma página después de ejecutar la acción
   } // fin del bloque if

// fin del archivo php
?>