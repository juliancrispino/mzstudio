<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$nombre = $_POST["nombre"] ;
$email = $_POST["email"] ;
$mensaje = $_POST["mensaje"] ;

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "proyecto_final";
        //indicamos selecionar la base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "Registro guardado" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO mensajes (nombre, email, mensaje)
                            VALUES ('$nombre','$email','$mensaje')";
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

                


   //echo "Fuera " ;
echo'<a href="index.html"> Volver Atrás</a>';


?>