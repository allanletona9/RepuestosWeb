<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Sistema Repuestos |Inicio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Inicio</a>
      </li>
    </ul>
  </nav>
  
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#3d3d3d">
    <a href="index.php" class="brand-link">
      <img src="dist/img/fac.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"> Sistema Repuestos</span>
    </a>
    <div class="sidebar"  >
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">-----Nombre Usuario----</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="inicio.php" 
               class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Inicio
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/forms/advanced.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Facturacion
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="pages/forms/devoluciones.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Devoluciones
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Reportes
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/reporterepuestos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Repuestos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/reportecliente.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Mantenimientos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="pages/forms/mantenimientoclientes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Cliente</p>
                </a>
              </li>
             </ul>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="pages/forms/mantenimientorepuestos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Repuesto</p>
                </a>
              </li>
               </ul>
             <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="pages/forms/mantenimientoproveedores.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Proveedor</p>
                </a>
              </li>
          </ul>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="pages/forms/mantenimientotipopago.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Tipo de Pago</p>
                </a>
              </li>
                </ul>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="pages/forms/mantenimientotiporesp.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Tipo de Repuesto</p>
                </a>
              </li>
                </ul>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="pages/forms/mantenimientousuario.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Usuario</p>
                </a>
              </li>
              </ul>
          </li>
            
             <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Consultas
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                    <a href="pages/forms/registrocliente.php"  class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Consultar Cliente</p>
                  </a>
              </li>
                <li class="nav-item">
					<a href="pages/forms/registrorepuestos.php" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Consultar Repuestos</p>
					</a>
				 </li> 
                <li class="nav-item">
                    <a href="pages/forms/registroproveedores.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Consultar Proveedores</p>
                    </a>
              </li>
                <li class="nav-item">
                     <a href="pages/forms/registrotipopago.php" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Consultar Tipo de Pago</p>
                     </a>
              </li>
              <li class="nav-item">
                  <a href="pages/forms/registrotiporesp.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Consultar Tipo de Repuesto</p>
                  </a>
              </li>
                <li class="nav-item">
                    <a href="pages/forms/registrousuario.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Consultar Usuarios</p>
                    </a>
              </li>
                 <li class="nav-item">
                    <a href="pages/forms/ordenregistro.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Consultar Ordenes de Compra</p>
                 </a>
              </li>
            </ul>
          </li>
            
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Inventario
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item has-treeview">
            <a href="pages/forms/orden.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Ordenes de Compra
              </p>
            </a>
            </ul>
              <ul class="nav nav-treeview">
               <li class="nav-item">
            <a href="pages/forms/inventario.php"  class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Inventario
                <i class="right badge badge-danger"></i>
              </p>
            </a>
           </ul>
               <ul class="nav nav-treeview">
               <li class="nav-item">
            <a href="pages/forms/kardex.php"  class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Kardex
                <i class="right badge badge-danger"></i>
              </p>
            </a>
           </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Inicio</h1>
          </div>
      </div>
    </div>

        
        <?php
        include 'pages/forms/Mantenimientos/Capas/Conexion/conexion.php';	
        $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if ($con->connect_error) 
        {
        die("Connection failed: " . $conn->connect_error);
        }
      
        $consulta = "SELECT COUNT(Nombre_Usuario) as can from tbl_usuarios";
        $resultados = mysqli_query($con, $consulta);
        $rows = mysqli_fetch_assoc($resultados);
        $id = $rows['can'];
        ?>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>+</h3>
                <p>Nueva Factura</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="pages/forms/advanced.php" class="small-box-footer">Crear Facturacion<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>-<sup style="font-size: 20px"></sup></h3>
                <p>Devoluciones</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="pages/forms/devoluciones.php" class="small-box-footer">Ver Lista Devoluciones<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>+ <?php echo "". $id;?></h3>
                <p>Usuarios Registrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="pages/forms/registrousuario.php" class="small-box-footer">Ver Lista Usuarios<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

                <div class="row">
                    <div id="sparkline-1"></div>
                    <div id="sparkline-2"></div>
                    <div id="sparkline-3"></div>
                </div>
    
            <div class="card bg-gradient-success">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendario
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body pt-0">
                <div id="calendar" style="width: 100%"></div>
              </div>
            </div>
        </div>
    </section>
  </div>
  <aside class="control-sidebar control-sidebar-dark" >
  </aside>
 
</div>
    </div>
  <footer class="main-footer" style="background-color:#45a4c3">
   <p class="footer-gd" style="color:white">Todos los derechos reservados EM - Repuestos / Diseñada por <a style="color:#3c3c3c" href="https://www.ggsoftdevelop.com/" target="_blank"><b>G&GSoftDevelop</b></a></p>
  </footer>
<script src="plugins/jquery/jquery.min.js"></script>

    
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="plugins/sparklines/sparkline.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
