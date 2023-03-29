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
<div class="content-wrapper" style="background-color: #FFE5D9" >  
     <!-- Se crea un carrusel con imagenes  -->
     <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
          <!-- Imagen 1 -->
        <div class="carousel-item active">            
          <img src="https://www.nacionrex.com/__export/1621633745204/sites/debate/img/2021/05/21/kpop-fans-actividades-imperdibles_crop1621632073946.jpg_554688468.jpg" class="d-block w-100" alt="..." style="width: 100%; height: 500px;">

        </div>
        <!-- Imagen 2 -->
        <div class="carousel-item">
          <img src="https://i0.wp.com/thehappening.com/wp-content/uploads/2021/11/sabrina-2021-11-16t020420293.jpg?fit=1440%2C700&ssl=1" class="d-block w-100" alt="..." style="width: 100%; height: 500px;">
        </div>
        <!-- Imagen 3 -->
        <div class="carousel-item">
          <img src="https://i0.wp.com/bemariekorea.com/wp-content/uploads/Copy-of-Copy-of-Copy-of-Copy-of-Copy-of-Copy-of-Copy-of-Copy-of-Best-Korean-Moisturizer-For-Dry-Skin-2.png?fit=1920%2C1080&ssl=1" class="d-block w-100" alt="..." style="width: 100%; height: 500px;">
        </div>
      </div>
      <!-- Flechas del carrusel hacia la izquierda -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <!-- Flechas del carrusel hacia la derecha -->
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Fin carrusel  -->
    <br>
    <!--Tarjeta -->
      <div class="container">
          <!--Tarjeta productos-->
          <div class="card">
              <img src="https://i.pinimg.com/originals/ab/ae/30/abae3096c581937d09f912b18dd19504.png">
              <h1>Productos</h1>
              <a href="formProductos.php" class="btn btn-primary botonForm">Go Productos</a>
          </div>
          <!--Tarjeta categoria productos-->
          <div class="card">
            <img src="https://img.freepik.com/vector-premium/supermercado-establecer-icono-productos_24877-230.jpg">
            <h1>Categoria de productos</h1>
            <a href="formCategoria.php" class="btn btn-primary botonForm">Go Categoria productos</a>
          </div>
          <!--Tarjeta tabla productos-->
          <div class="card">
            <img src="https://cdn-icons-png.flaticon.com/512/6815/6815332.png">
            <h1>Tabla Productos</h1>
            <a href="tabla.html" class="btn btn-primary botonForm">Go Tabla Productos</a>
          </div>
          
        
      </div>
      
    <!--Termina tarjeta 1-->

    <!-- jQuery -->
    <script src="admin-lte/plugins/jquery/jquery.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin-lte/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="admin-lte/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="admin-lte/dist/js/pages/dashboard.js"></script>
</body>
  

</html>
