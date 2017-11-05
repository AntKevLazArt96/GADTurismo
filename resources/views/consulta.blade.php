@extends('master')

@section('title', 'Verifiacion')

@section('content')
<style>  
#contenidohi
{
  position: relative;
  top:50px;
}
h1
{
   font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
         font-size: 25px;  
}
#gif_cargando
{
  display: none;
}
</style>
	                <div class="wrapper wrapper-content animated fadeInRight">           
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Listado de solicitudes
                                    </h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        
                                         
                                    </div>
                                </div>
                                <div class="ibox-content" class="container">
                                <div>
                                <div class="ibox float-e-margins">
     

<div class="ibox-content">
 <!-- AQUI CONSTRUCCION DE FORMULARIO DE ENVIO DE INFORMACION    -->

         <form method="POST" a accept-charset="UTF-8" role="form" id="form1" class="form-horizontal" enctype="multipart/form-data">
         <input name="_token" type="hidden" value="xLtjk2Ctq0Jg192jdB8O7P8soSSAbPdAvba10Cuw">
        
        
                        
                  
                                      <div class="form-group">
                         <label for="idbusqueda" class="col-lg-3 control-label">RUC:</label>
                       <div class="col-lg-8"> 
                          <input class="form-control" placeholder="Ingrese RUC" name="idbusqueda" type="text" id="idbusqueda">
                      </div>  
                    </div>    
                                        
                       
                  
                                      <div class="form-group">
                         <label for="idbusquedaclave" class="col-lg-3 control-label">Clave Catastral:</label>
                       <div class="col-lg-8"> 
                          <input class="form-control" placeholder="Ingrese Clave Catastral" name="idbusquedaclave" type="text" id="idbusquedaclave">
                      </div>  
                    </div>    
                                        
                       
                  
                  
                      <div class="form-group">
                       <div class="col-lg-11"> 
                        <input class="btn btn-primary" id="btnbuscar" style="float:right" type="submit" value="Consultar">
                       </div>  
                      </div> 

        
        </form>

      
        
  </div> 
    <!-- Estado del Tramite -->
        <!-- Si tiene trámites pendientes -->
          <div class="jumbotron">
        <h2>Usted no tiene solicitudes pendientes.</h2>
      </div>
    <!-- -->
       <table id="tbbuzonmain" class="table table-striped table-bordered table-hover display dataTable">
                                            
     </table>
      
  
  
</div>

    <table id="detalles" class="table table-striped table-bordered table-hover display">
    <tbody>
    <tr style="font-size:15px;" '="">
    <th '=""><center>Nº de solicitud </center></th>
    <th><center> Dirección</center> </th>
    <th><center>Fecha de solicitud</center></th>
    <th><center>Clave catastral</center></th> 
    <th><center>ruc</center></th>
    <th><center> Estado</center> </th>     
    <tr style="font-size:15px;" '="">
    <th '=""><center>53 </center></th>
    <th><center> SANTA MONICA</center> </th>
    <th><center> 12/06/2015</center> </th>
    <th><center> 001111111</center> </th>
    <th><center> 12345</center> </th>
    <th><center><span class="label label-primary">Cancelado</span> </center></th>
    <tr style="font-size:15px;" '="">
    <th '=""><center>94 </center></th>
    <th><center> SANTA MONICA</center> </th>
    <th><center> 12/06/2015</center> </th>
    <th><center> 001111111</center> </th>
    <th><center> 12345</center> </th>
    <th><center><span class="label label-primary">Cancelado</span> </center></th>
    <tr style="font-size:15px;" '="">
    <th '=""><center>68 </center></th>
    <th><center> SANTA MONICA</center> </th>
    <th><center>12/06/2017</center> </th>
    <th><center> 001111111</center> </th>
    <th><center> 12345</center> </th>
    <th><center><span class="label label-warning">Pendiente</span></center></th>
    

   </tbody>
   </table>
</div>
 
 



<br>

	<div id="gif_cargando" align="center">  
	 <img src="http://ciudadanodigital.manta.gob.ec/local/public/cargando.gif"  style="position: absolute: top:100px; width: 10%;"/>
	 <p>  Cargando...</p>
	</div>
	<div id="divconsulta">
	</div>


                        </div>
                    </div>
                </div>
                       
                      
 
         

        </div>
         
         
         
    </div>

  <script src="http://ciudadanodigital.manta.gob.ec/assets/js/blazy.min.js"></script>

        <script type="text/javascript">

        var plugin_path = 'assets/plugins/';

        var bLazy = new Blazy({
            selector: 'img'
        });

        </script>

        <script type="text/javascript">
      
       
    </script> 
    

<script>
function consultarclave(clave){
  //console.log(clave);
  $("#raclave").prop('checked', true);
  $("#labelcal").addClass("active");
  $("#labelce").removeClass("active");
  //$("input:radio:first").prop("checked", true).trigger("change");
  $("#tipobuscar").val(clave);
  //var frm = $('#frm');
  frm.submit();
}
function val(e) {
                  tecla = (document.all) ? e.keyCode : e.which;
                  if (tecla==8) return true;
                  var patron =/[0-9]/;
                  var te = String.fromCharCode(tecla);
                  return patron.test(te);
                }
var frm = $('#frm');
        frm.submit(function (ev) {
            ev.preventDefault(); 
            $("#divconsulta").html($("#gif_cargando").html());
            $("#gif_cargando")
            $.ajax({
                type: frm.attr('method'),
                url: frm.attr('action'),
                data: frm.serialize(),
                statusCode: {
                    404: function() {
                    toastr["error"]("Se produjo un error al consultar los datos. 1 :(");
                    //bloquearpantalla(0);                                
                    },                            
                    401: function() {
                    toastr["error"]("Se produjo un error al consultar los datos. 2 :(");
                    //bloquearpantalla(0);
                    }
                    //$("#divconsulta").html("Se produjo un error al consultar los datos. 4 :( ");
                },
                error: function(objeto, opciones, quepaso){
                    //setTimeout(function(){ajaxres.abort();}, 100);
                    //bloquearpantalla(0);
                    //$(tr).attr( "class","danger" );
                    $("#divconsulta").html(quepaso);
                },
                success: function (data) {  
                //alert(data);     
                $("#divconsulta").html(data);  
                  
            },
            error: function(objeto, opciones, quepaso){
                toastr["error"]("Se produjo un error al consultar los datos. 3 :( ");
                $("#divconsulta").html("Se produjo un error al consultar los datos. 3 :( ");
            }
        });
        //bloquearpantalla(0);
        }); 
</script>
@endsection