<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin-lte/dist/css/adminlte.min.css">
    <!-- ICONOS -->
    <script src="https://kit.fontawesome.com/a8a964cfb5.js" crossorigin="anonymous"></script>
    <!-- Librerias boostrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- hoja de estilos -->
    <link href="estilos.css" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <!-- se crea un div donde se guardara todo el menu de la izquierda -->
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="dasboard.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.html" class="nav-link">Exit</a>
        </li>
      </ul>
  
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #9d8189;">
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="dasboard.php" class="nav-link active">
                      <i class="fa-solid fa-house"></i>
                      <p>HOME</p>
                  </a>
                </li>
              </ul>
            </li>

             
  
             <!-- apatado productos -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active" style="background-color: aliceblue;">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  PRODUCTO
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                  <!-- Apartado del menu de productos -->
                  <li class="nav-item">
                      <a href="formProductos.php" class="nav-link">
                          <i class="fa-sharp fa-solid fa-box"></i>
                          <p>
                              PRODUCTOS
                          </p>
                      </a>
                  </li>
                  <!-- fin Apartado del menu de productos -->
                  <!-- Apartado del menu de catetorias de productos -->
                  <li class="nav-item ">
                      <a href="formCategoria.php" class="nav-link">
                          <i class="fa-solid fa-list"></i>
                          <p>
                              CATEGORÍAS DE PRODUCTOS
                          </p>
                      </a>
                  </li>
                  <!-- fin Apartado del menu de categorias -->
                  <!-- Apartado del menu de Tabla de producto -->
                  <li class="nav-item">
                      <a href="insertProductos.php" class="nav-link">
                      <i class="fa-solid fa-table"></i>
                          <p>
                              TABLA PRODUCTOS
                          </p>
                      </a>
                  </li>
                  <!-- fin Apartado del tabla de productos --> 
                  <!-- Apartado de listado de categorias -->
                  <li class="nav-item">
                      <a href="verCategorias.php" class="nav-link">
                      <i class="fa-solid fa-table"></i>
                          <p>
                              LISTADO DE CATEGORIAS
                          </p>
                      </a>
                  </li>
                  <!-- fin de listado de categorias --> 
  
  
              </ul>
            </li>
             <!-- apatado productos -->
        </nav>
        <!-- /terina el .sidebar-menu -->
      </div>
      <!-- termina el /.sidebar -->
    </aside>
  </div>
  <!-- ./wrapper -->
<div class="wrapper">
      <!-- Main content -->
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6" >
              <div class="bg-1">
                <h1 class="t-stroke t-shadow">PRODUCTOS</h1>
              </div>
              <br>
              <!-- general form elements -->
              <div class="card card-primary">
                <!-- /.card-header -->
                <table class="table">
                    <thead>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Precio de venta</th>
                        <th>Precio de compra</th>
                        <th>Categoria</th>
                    <tbody>
                    <?php
                        //conexion a la base de datos(servidor, usuario, constraseña, nombreBD )
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
            
                        //tomar los valores del fromulario a traves de los datos de los campos
                        if (isset($_POST['nombre'], $_POST['precioven'], $_POST['precioComp'])){
                            $nombre=$_POST['nombre'];
                            $precio_venta=$_POST['precioven'];
                            $precio_compra=$_POST['precioComp'];
                            $categoria=$_POST['categoria'];
                            
                            //Ejecutar el Query de insercion de datos
                            $sql="INSERT INTO productos (nombre_producto,precio_venta,precio_compra,id_categoria) VALUES ('$nombre','$precio_venta',' $precio_compra', (SELECT id_categoria FROM categoria WHERE nombre_categoria = '$categoria'))";
                            $resultado=mysqli_query($conexion,$sql);
                            //mandar mensaje de datos guardados
                            if ($resultado) {
                                echo "<h3>Datos almacenados correctamente.</h3>";
                            }else{
                                echo "ERROR!".mysqli_error($conexion);
                            }
                        }
                        // Ejecutar la consulta SQL
                        $resultado = mysqli_query($conexion, "SELECT productos.*, categoria.nombre_categoria AS nombre_categoria FROM productos JOIN categoria ON productos.id_categoria = categoria.id_categoria");

                        // Mostrar los resultados en una tabla HTML
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            echo "<tr>";
                            echo "<td>" . $fila["id_productos"] . "</td>";
                            echo "<td>" . $fila["nombre_producto"] . "</td>";
                            echo "<td>" . $fila["precio_venta"] . "</td>";
                            echo "<td>" . $fila["precio_compra"] . "</td>";
                            echo "<td>" . $fila["nombre_categoria"] . "</td>";
                            echo "</tr>";
                        }

                            // Cerrar la conexión
                            mysqli_close($conexion);

                            ?>
                        <!-- Agrega más filas aquí -->
                    </tbody>
                    </table>

              <!-- /.card -->
              </div>
            </div>
          </div>
        </div>
  </div>
    
</body>
</html>