<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema Repuestos |Mantenimiento Usuarios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
         <a href="../../inicio.php"   class="nav-link">Inicio</a>
      </li>
    </ul>
  </nav>

 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#3d3d3d">
    <a href="index.php" class="brand-link">
      <img src="../../dist/img/fac.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
             <a href="../../inicio.php" 
               class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Inicio
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../pages/forms/advanced.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Facturacion
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="../../pages/forms/devoluciones.php" class="nav-link">
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
                <a href="../../pages/forms/reporterepuestos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Repuestos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../pages/forms/reportecliente.php" class="nav-link">
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
                <a href="../../pages/forms/mantenimientoclientes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Cliente</p>
                </a>
              </li>
             </ul>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="../../pages/forms/mantenimientorepuestos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Repuesto</p>
                </a>
              </li>
               </ul>
             <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="../../pages/forms/mantenimientoproveedores.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Proveedor</p>
                </a>
              </li>
          </ul>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="../../pages/forms/mantenimientotipopago.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Tipo de Pago</p>
                </a>
              </li>
                </ul>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="../../pages/forms/mantenimientotiporesp.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Tipo de Repuesto</p>
                </a>
              </li>
                </ul>
                 <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="../../pages/forms/mantenimientousuario.php" class="nav-link">
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
                    <a href="../../pages/forms/registrocliente.php"  class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Consultar Cliente</p>
                  </a>
              </li>
                <li class="nav-item">
					<a href="../../pages/forms/registrorepuestos.php" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Consultar Repuestos</p>
					</a>
				 </li> 
                <li class="nav-item">
                    <a href="../../pages/forms/registroproveedores.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Consultar Proveedores</p>
                    </a>
              </li>
                <li class="nav-item">
                     <a href="../../pages/forms/registrotipopago.php" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Consultar Tipo de Pago</p>
                     </a>
              </li>
              <li class="nav-item">
                  <a href="../../pages/forms/registrotiporesp.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Consultar Tipo de Repuesto</p>
                  </a>
              </li>
                <li class="nav-item">
                    <a href="../../pages/forms/registrousuario.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Consultar Usuarios</p>
                    </a>
              </li>
                 <li class="nav-item">
                    <a href="../../pages/forms/ordenregistro.php" class="nav-link">
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
            <a href="../../pages/forms/orden.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Ordenes de Compra
              </p>
            </a>
            </ul>
              <ul class="nav nav-treeview">
               <li class="nav-item">
            <a href="../../pages/forms/inventario.php"  class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Inventario
                <i class="right badge badge-danger"></i>
              </p>
            </a>
           </ul>
               <ul class="nav nav-treeview">
               <li class="nav-item">
            <a href="../../pages/forms/kardex.php"  class="nav-link">
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
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mantenimiento Usuario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item" style="color:#0056b3;"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item" style="color:#0056b3;">Mantenimientos</li>
              <li class="breadcrumb-item" style="color:#3d3d3d"><b>Mantenimiento Usuario</b></li>
            </ol>
          </div>
        </div>
      </div>
    </section>

      
        <?php
        include 'Mantenimientos/Capas/Conexion/conexion.php';	
        $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if ($con->connect_error) 
        {
        die("Connection failed: " . $conn->connect_error);
        }
      
        $consulta = "SELECT id_Usuario as Id FROM tbl_usuarios ORDER by id_Usuario DESC LIMIT 1";
        $resultados = mysqli_query($con, $consulta);
        $rows = mysqli_fetch_assoc($resultados);
        $id = $rows['Id'];
      
        $suma = $id + 1;
        ?>

   
    <section class="content">
         <form action="Mantenimientos/Capas/Logica/Log.php" method="post" id="mantenUsuario" name="mantenUsuario">
             <input hidden type="text"  id="usuario" name="usuario" value="Usuario">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Datos del Usuario</h3>
          </div>
          <div class="card-body">
            <div class="row">
           <div class="col-md-6">
               <div class="form-group">
                  <center><label for="exampleInputEmail1" style="margin-left: -41px;font-size: 20px;">Codigo Usuario</label></center>
                  <center><input type="text" class="form-control" style="background-color:white;border: 0;width: 15%;font-size:25px;padding: .375rem 0rem;" placeholder="<?php echo "0". $suma;?>" disabled></center> 
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre Usuario</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required>
                </div>
              </div>
                  <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Apellido Usuario</label>
                    <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Appelido" required>
                </div>
              </div>
                  <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Contraseña del Usuario</label>
                    <input type="password" class="form-control" id="Clave" name="Clave" placeholder="Contraseña" required>   
                </div>
              </div>
                <div class="col-md-4">
                </div>
                 <div class="col-md-4">
                      <br>
                     <center><button type="submit" form="mantenUsuario" style="background-color:#3c3c3c" class="btn btn-block btn-success">Guardar</button></center> 
                  </div>
            </div>
          </div>
        </div> 
      </div>
        </form>
    </section>
  </div>
    
 <footer class="main-footer" style="background-color:#45a4c3">
   <p class="footer-gd" style="color:white">Todos los derechos reservados EM - Repuestos / Diseñada por <a style="color:#3c3c3c" href="https://www.ggsoftdevelop.com/" target="_blank"><b>G&GSoftDevelop</b></a></p>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">

  </aside>

</div>

<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<script src="../../dist/js/demo.js"></script>

<script>
  $(function () {
    
    $('.select2').select2()

   
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })


    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
  
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })

    $('[data-mask]').inputmask()

  
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
 
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
</body>
</html>
