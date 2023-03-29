<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Productos</title>

  <!-- Theme style -->
  <link rel="stylesheet" href="admin-lte/dist/css/adminlte.min.css">
  <link href="estilos.css" rel="stylesheet">
  <!-- ICONOS -->
  <script src="https://kit.fontawesome.com/a8a964cfb5.js" crossorigin="anonymous"></script>

  <!-- Se agregan los archivos debootstrap -->
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

  <!-- formulario  -->
  <div class="wrapper">
    <!-- Main content -->
      <div class="container-fluid">
        <div class="row" style="display: flex; justify-content: center; align-items: center;">
          <!-- left column -->
          <div class="col-md-6" >
            <!-- general form elements -->
            <div class="bg-1">
              <h1 class="t-stroke t-shadow">CATEGORIA PRODUCTOS</h1>
            </div>
            <br>
            <div class="card card-primary">
              <!-- /.card-header -->
              
              <!-- form start -->
              <form name="form1" method="post" action="insertCategoria.php">
                <!-- /.card-body -->
                <div class="card-body">

                  <!-- Ingresar nombre  -->
                  <div class="form-group" id="nombrediv">
                    <label for="nombreCategoria">Nombre <span class="obligatorio">(*)</span></label>
                    <input type="text" class="form-control m-2 input" name="nombreCategoria"  id="nombreCategoria" placeholder="Ingrese el nombre" aria-describedby="datosw" required>
                    <div id="datosw" class="invalid-feedback">
                      Los datos son obligatorios
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <!-- Apartado de botones de enviar y eliminar-->
                <div style="display: flex; justify-content: center; " > 
                  <button type="submit" id="botonEnviar" class="btn btn-primary botonForm" >Enviar</button>
                  <button type="reset" class="btn btn-primary botonForm">Limpiar</button>
                </div>
            </form>

            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
  </div>
  <!-- ./wrapper -->


    <!-- se llama al archivo js -->
    <script src="js/appcateProductos.js"></script>
    <!-- jQuery -->
    <script src="admin-lte/plugins/jquery/jquery.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin-lte/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="admin-lte/dist/js/pages/dashboard.js"></script>


</body>
</html>
