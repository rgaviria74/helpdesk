
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class=  "nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Home</a>
      </li>      
    </ul>  
    <ul class="navbar-nav ml-auto">
            
      <li class="nav-item">
        <a class="nav-link" href="../controller/Logout.php"><i class="fas fa-sign-out-alt"> Salir</i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../vista/adm_catalogo.php" class="brand-link">
      <img src="../assets/img/logolibre.png"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ULibreSoft</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img id="Avatarnav" src="../assets/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nombre Usuario</a>
          <input id="id_usuario" type="hidden" value="usuario" >
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
         
          <li class="nav-header">Almacen</li>
          <li class="nav-item">
            <a href="adm_productos.php" class="nav-link">
              <i class="nav-icon fas fa-pills"></i>
              <p>Gestion productos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="adm_producto.php" class="nav-link">
              <i class="nav-icon fas fa-pills"></i>
              <p>Gestion producto</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="adm_atributos.php" class="nav-link">
              <i class="nav-icon fas fa-vials"></i>
              <p>Gestion atributos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="adm_lote.php" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>Gestion lote</p>
            </a>
          </li>
         

          <li class="nav-header">Compras</li>
         
          <li class="nav-item">
            <a href="adm_proveedores.php" class="nav-link">
              <i class="nav-icon fas fa-truck"></i>
              <p>Gestion proveedores</p>
            </a>
          </li>
         

          
          <li class="nav-item">
            <a href="adm_clientes.php" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>Gestion clientes</p>
            </a>
          </li>
        

          <li class="nav-header">Usuarios</li>
          
          <li class="nav-item">
            <a href="editar_datos_personales.php" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>Datos Personales</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="adm_usuario.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Gestión Usuario</p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="../controller/Logout.php" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Salir</p>
            </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>