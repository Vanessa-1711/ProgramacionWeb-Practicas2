<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR DATOS EN LA BD</title>
    <!-- Theme style -->
</head>
<body>
    <?php
        //conexion a ala base de datos 
        //nombre del servidor + nombre de usuario+contraseña + nombre de la base de datos
        $servername = "localhost";
        $username = "debian-sys-maint";
        $password = "9855384e1e0d7de56f040b8caefb9449bdb3297ab10fcd24";
        $dbname = "formularios";

        // Crear conexion a la base de datos
        $conexion = mysqli_connect($servername, $username, $password,$dbname);
        // revisar conexion
        if($conexion==false){
            die("Error no existe una conexion a la base de datos".mysqli_connect_error());
        }
        if (isset($_POST['nombreCategoria'])){
                        
            $nombre=$_POST['nombreCategoria'];
            
            //Ejecutar el Query de insercion de datos
            $sql="INSERT INTO categoria (nombre_categoria) VALUES ('$nombre')";
            $resultado=mysqli_query($conexion,$sql);
            //mandar mensaje de datos guardados
            if ($resultado) {
              //echo "<h3>Datos almacenados correctamente.</h3>";
              include('verCategorias.php');
            }else{
              echo "ERROR!".mysqli_error($conexion);
            }
          }
        
        //cerrar conexion
        mysqli_close($conexion)
    ?>    
</body>
</html>