<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Administración de sitio web | @yield('title')</title>
    <style>
        .table-fixed thead {
  width: 100%;
}
.table-fixed tbody {
  height: 100px;
  overflow-y: auto;
  width: 100%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
  display: block;
}
.table-fixed tbody td, .table-fixed thead > tr> th {
  float: left;
  border-bottom-width: 0;
}
</style>
      <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.0/moment.min.js"></script>
<!-- importo todos los idiomas -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.0/moment-with-locales.min.js"></script>
  

    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/bootstrap.min.css">

    <link href="http://ciudadanodigital.manta.gob.ec/local/vendor/kartik-v/bootstrap-fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href=" http://ciudadanodigital.manta.gob.ec/js/bootstrap-datepicker/css/bootstrap-datepicker3.min.css ">
    <!--<link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/font-awesome/css/font-awesome.css">-->

  

    <!-- Toastr style -->
    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/plugins/toastr/toastr.min.css">


 

    <!-- Gritter -->
    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/gritter/jquery.gritter.css">

     

    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/animate.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/style.css">


 <!-- Data Tables -->
 <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/plugins/dataTables/dataTables.bootstrap.css">

 <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/plugins/dataTables/dataTables.responsive.css">

 <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/plugins/dataTables/dataTables.tableTools.min.css">


  <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/plugins/blueimp/css/blueimp-gallery.min.css">


 

    <!-- Mainly scripts -->
     <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/jquery-2.1.1.js"></script>

     <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/bootstrap.min.js"></script>

     <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/metisMenu/jquery.metisMenu.js"></script>

     <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>



     
    <!-- Color Box -->    
    <script type="text/javascript" src="http://ciudadanodigital.manta.gob.ec/node_modules/jquery-colorbox/jquery.colorbox.js"></script>
    <link rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/node_modules/jquery-colorbox/colorbox.css" /> 


    <!-- Flot -->
     <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/flot/jquery.flot.js"></script>

     <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/flot/jquery.flot.tooltip.min.js"></script>

     <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/flot/jquery.flot.spline.js"></script>

        <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/flot/jquery.flot.resize.js"></script>

         <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/flot/jquery.flot.pie.js"></script>

 
 
     <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/flot/jquery.flot.pie.js"></script>

 

    <!-- Peity -->
     <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/peity/jquery.peity.min.js"></script>

     <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/demo/peity-demo.js"></script>

 
    <!-- Custom and plugin javascript -->
    <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/inspinia.js"></script>

    <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/pace/pace.min.js"></script>

 

    <!-- jQuery UI -->
    <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/jquery-ui/jquery-ui.min.js"></script>

  

    <!-- GITTER -->
    <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/gritter/jquery.gritter.min.js"></script>

 

    <!-- Sparkline -->
    <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/sparkline/jquery.sparkline.min.js"></script>

 

    <!-- Sparkline demo data  -->
     <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/demo/sparkline-demo.js"></script>

 

    <!-- ChartJS-->
    <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/chartJs/Chart.min.js"></script>

 

    <!-- Toastr -->
    <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/toastr/toastr.min.js"></script>


    <!-- Chosen -->
    <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/chosen/chosen.jquery.js"></script>


    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/plugins/chosen/chosen.css">


     <!-- Data Tables -->
     <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/dataTables/jquery.dataTables.js"></script>

     <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/dataTables/dataTables.bootstrap.js"></script>

     <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/dataTables/dataTables.responsive.js"></script>

     <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

     <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/selective/selectize.js"></script>


    <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>


    <!-- Jeialert   
    <script type="text/javascript" src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/jalert/jquery.alerts.mod.js"></script>    
    <link rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/jalert/jquery.alerts.css" />
       <script type="text/javascript" src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/jalert/jquery.ui.draggable.js"></script>
                <script type="text/javascript" src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/jalert/jquery-1.4.2.min.js"></script>
         
 --> 

    <script src="http://ciudadanodigital.manta.gob.ec/assets/js/jquery.PrintArea.js"></script>
 
    <script src="http://ciudadanodigital.manta.gob.ec/local/vendor/kartik-v/bootstrap-fileinput/js/fileinput.min.js"></script>
    <script src="http://ciudadanodigital.manta.gob.ec/local/vendor/kartik-v/bootstrap-fileinput/js/locales/es.js"></script> 
    <script type="text/javascript" src="http://ciudadanodigital.manta.gob.ec/js/bootstrap-datepicker/bootstrap-datepicker.js"></script>
     <script type="text/javascript" src="http://ciudadanodigital.manta.gob.ec/js/bootstrap-datepicker/locales/bootstrap-datepicker.es.js"></script>


    <script src="http://ciudadanodigital.manta.gob.ec/local/public/vendors/ckeditor/ckeditor.js"></script>

  

    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/plugins/selective/selectize.bootstrap3.css">


 
    <script src="https://use.fontawesome.com/a2263a18cb.js"></script>



      <script>
        $(document).ready(function() {
            $('#tbbuzon').dataTable({
                responsive : true,
                language: {
                    "emptyTable":     "No hay datos disponibles en la tabla",
                    "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
                    "infoFiltered":   "(filtered from _MAX_ total entries)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Mostrar _MENU_ entradas",
                    "loadingRecords": "Cargando...",
                    "processing":     "Procesando...",
                    "search":         "Buscar:",
                    "zeroRecords":    "No se encontraron registros coincidentes",
                    "paginate": {
                        "first":      "Primero",
                        "last":       "Último",
                        "next":       "Siguiente",
                        "previous":   "Atrás"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                },
              
                    "order": ([ 0, 'desc' ]),

                    responsive: true,
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5'
        ]
                    
                  
            });


        $('#tbbuzon1').dataTable({
                responsive : true,
                language: {
                    "emptyTable":     "No hay datos disponibles en la tabla",
                    "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
                    "infoFiltered":   "(filtered from _MAX_ total entries)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Mostrar _MENU_ entradas",
                    "loadingRecords": "Cargando...",
                    "processing":     "Procesando...",
                    "search":         "Buscar:",
                    "zeroRecords":    "No se encontraron registros coincidentes",
                    "paginate": {
                        "first":      "Primero",
                        "last":       "Último",
                        "next":       "Siguiente",
                        "previous":   "Atrás"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                },
              
                    "order": ([ 0, 'desc' ]),

                    responsive: true,
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5'
        ]
                    
                  
            });

        });  
   
</script>
<script>

 


$(document).ready(function() {
   
    
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"100%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
     
});     

</script>     

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img src="http://manta.gob.ec/templates/shaper_maxima/images/presets/preset1/logo.png" class=" img-responsive" alt="">
                          
                             </span>
                           
                        </div>
                        <div class="logo-element">
                            GAD M
                        </div>
                    </li>
                  
 <li class=active>
      <a href="http://ciudadanodigital.manta.gob.ec/consultadeuda"><i class="fa fa-plane"></i>
        <span class="nav-label">Tramites Turismo</span>
      </a>
  </li>
 <!--
   <li >
      <a href="http://ciudadanodigital.manta.gob.ec/inicio"><i class="fa fa-file-text-o"></i>
        <span class="nav-label">Inicio</span>
      </a>
  </li>
   <li class=active>
      <a href="http://ciudadanodigital.manta.gob.ec/consultadeuda"><i class="fa fa-search"></i>
        <span class="nav-label">Tramites Turismo</span>
      </a>
  </li>
    <li >
      <a href="http://ciudadanodigital.manta.gob.ec/titulodecredito"><i class="fa fa-print"></i>
        <span class="nav-label">Títulos de Crédito</span>
      </a>
  </li>
          <li >

      <a href="http://ciudadanodigital.manta.gob.ec/usosuelo"><i class="fa fa-home"></i>
        <span class="nav-label">Informe de Regulación Urbana</span>

      </a>
  </li>
      <li >
      <a href="http://ciudadanodigital.manta.gob.ec/turnosdetransito"><i class="fa fa fa-paste"></i>
        <span class="nav-label">Turnos de Tránsito</span>
      </a>
  </li>
        <li >

      <a href="http://ciudadanodigital.manta.gob.ec/enviarsolicitud"><i class="fa fa-envelope"></i>
        <span class="nav-label">Tramites Alcaldia</span>

      </a>
  </li>
  
    <li >
      <a href="http://ciudadanodigital.manta.gob.ec/guiatramites"><i class="fa fa fa-list-alt"></i>
        <span class="nav-label">Guías de Trámites</span>
      </a>
  </li>
  
      <li >
      <a href="http://ciudadanodigital.manta.gob.ec/transferencia_dominio"><i class="fa fa fa fa-users"></i>
        <span class="nav-label">Transferencia de Dominio</span>
      </a>
  </li>


        <li >

      <a href="http://ciudadanodigital.manta.gob.ec/reportar"><i class="fa fa-envelope"></i>
        <span class="nav-label">Reportar Novedad</span>

      </a>
  </li>

    </li>
    <li >
      <a href="http://ciudadanodigital.manta.gob.ec/permiso_ambiental"><i class="fa fa fa-tree"></i>
        <span class="nav-label">Permiso Ambiental</span>
      </a>
  </li>

  
  
  <li >
      <a href="#"><i class="fa fa-users fa-1x"></i> <span class="nav-label">Servicios</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
               <li ><a href="http://ciudadanodigital.manta.gob.ec/Consulta" ><i class="fa fa-file-text-o"></i>Consultar Titulo de Credito</a></li>
        </ul>
  </li> 
  -->
  <!--
  <li >
      <a href="#"><i class="fa fa-users fa-1x"></i> <span class="nav-label">Cuenta</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
                  <li >
                     <a href="http://ciudadanodigital.manta.gob.ec/cambiarconstrasena">Cambiar Contrase&ntilde;a</a>
                  </li>   
                  <li >
                      <a href="http://ciudadanodigital.manta.gob.ec/usuarios/669/edit">Actualizar Informaci&oacute;n</a>
                  </li>      

        </ul>
  </li> -->
 
  
                                    
                </ul>

            </div>
        </nav>





        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            
        </div>
            <ul class="nav navbar-top-links navbar-right">
                 
                
                   

                <li>
                    <span class="m-r-sm text-muted welcome-message">
                    {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                    </span>
                </li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i> Cerrar Sesión
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                    </form>
                </li>
                

                
            </ul>

        </nav>
        </div>
                
                @yield('content')


</body>
</html>