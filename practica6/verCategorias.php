<?php
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="admin-lte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin-lte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="admin-lte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="admin-lte/plugins/summernote/summernote-bs4.min.css">
  <script src="https://kit.fontawesome.com/a8a964cfb5.js" crossorigin="anonymous"></script>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <!--LOGIN -->
  <link href="estilos.css" rel="stylesheet">
  

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
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
                <a href="index.php" class="nav-link active">
                    <i class="fa-solid fa-house"></i>
                    <p>HOME</p>
                </a>
              </li>
            </ul>
          </li>
          

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
                <!-- Apartado del menu de cateforias de productos -->
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
                <!-- Apartado del menu de Tabla de producto -->
                <li class="nav-item">
                    <a href="verCategorias.php" class="nav-link">
                    <i class="fa-solid fa-table"></i>
                        <p>
                            LISTADO DE CATEGORIAS
                        </p>
                    </a>
                </li>
                <!-- fin Apartado del tabla de productos -->


            </ul>
          </li>

      </nav>
      <!-- /terina el .sidebar-menu -->
    </div>
    <!-- termina el /.sidebar -->
  </aside>
  </div>
  <!-- se cierra el div de ./wrapper -->
  <!-- ./wrapper -->
    <div class="wrapper">
      <!-- Main content -->
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6" >
              <div class="bg-1">
                <h1 class="t-stroke t-shadow">DATOS INGRESADOS</h1>
              </div>
              <br>
              <!-- general form elements -->
              <div class="card card-primary">
                <!-- /.card-header -->
                <table class="table">
                    <thead>
                        <tr>
                        <th>ID CATEGORIA</th>
                        <th>NOMBRE Categoria</th>
                    </thead>
                    <tbody>
                        <tr>
                        <?php 
                          $sql = "SELECT * FROM categoria";
                          $ejecuta_senencia = mysqli_query($conexion, $sql);
                          while ($mostrar = mysqli_fetch_array($ejecuta_senencia)) {  
                        ?>
                        <tr>
                        <td><?php echo $mostrar['id_categoria']; ?></td>
                        <td><?php echo $mostrar['nombre_categoria']; ?></td>
                        </tr>
                        <?php
                          }
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