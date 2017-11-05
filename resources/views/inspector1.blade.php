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
                                    <h5>Listado de Solicitudes PendienteS
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
 
  
</div>

    <table id="detalles" class="table table-striped table-bordered table-hover display">
    <tbody>
    <tr style="font-size:15px;" '="">
    <th '=""><center>Nº de solicitud </center></th>
    <th><center> Cedula del tramitante</center> </th>
    <th><center> Dirección</center> </th>
    <th><center>Fecha de solicitud</center></th>
    <th><center> Estado</center> </th>
    <th><center> Realizar inspección</center> </th>       
    <tr style="font-size:15px;" '="">
    <th '=""><center>53 </center></th>
    <th><center> 0802268619</center> </th>
    <th><center> SANTA MONICA</center> </th>
    <th><center> 12/06/2015</center> </th>
    <th><center><span class="label label-primary">Aprobado</span> </center></th>
    
    <th><center ><input class="btn btn-primary" value="Click aqui"></center> </th>
    <tr style="font-size:15px;" '="">
    <th '=""><center>94 </center></th>
    <th><center> 0802268619</center> </th>
    <th><center> SANTA MONICA</center> </th>
    <th><center> 12/06/2015</center> </th>
    <th><center><span class="label label-primary">Denegado</span> </center></th>
    <th><center ><input class="btn btn-primary" value="Click aqui"></center> </th>
    <tr style="font-size:15px;" '="">
    <th '=""><center>68 </center></th>
    <th><center> 0802268619</center> </th>
    <th><center> SANTA MONICA</center> </th>
    <th><center>12/06/2017</center> </th>
    <th><center><span class="label label-warning">Pendiente</span></center></th>
    
    <th><center ><input class="btn btn-primary" value="Click aqui"></center> </th>
    

   </tbody>
   </table>
</div>


<div class="col-md-6">
      
      <form method="POST" action="http://ciudadanodigital.manta.gob.ec/enviardoc" accept-charset="UTF-8" id="formulario" enctype="multipart/form-data"><input name="_token" type="hidden" value="xLtjk2Ctq0Jg192jdB8O7P8soSSAbPdAvba10Cuw">
          
        <p style="font-size: 22px;color: #0086c7;">Llene los campos a continuación para enviar comentarios Sobre la inspección</p>

        <div class="form-group has-feedback">
                <label for="asunto">Asunto:</label>
 
                <input title="Título del asunto que desea enviar" data-placement="top" data-toggle="tooltip" class="form-control" placeholder="Título de asunto" id="txtasunto" maxlength="150" style="resize:inherit; border: 2px solid #0086cf;" name="asunto" type="text">
 
        </div>
     
         <div class="form-group has-feedback">
                <label for="descripcion">Descripción del trámite:</label>
    
 
                <textarea title="Agregue una descripcion de su trámite" data-placement="top" data-toggle="tooltip" class="form-control" placeholder="Escriba detalladamente su trámite" style="resize:inherit; height:100px; border: 2px solid #0086cf;" name="descripcion" cols="50" rows="10" id="descripcion"></textarea>     
 

     
         </div>

         <div class="form-group has-feedback">
         <label class="control-label">Cargue su archivo digital del trámite en formato PDF, con tamaño no mayor a 5MB</label>
                <input name="archivo_1" type="file" class="filestyle" data-showupload="false" data-input="true" data-buttonname="btn-success" required="" data-buttontext="Buscar" data-iconname="fa fa-certificate" data-buttonbefore="true" data-placeholder="No ha seleccionado archivos aún" id="filestyle-0" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);">
                <div class="bootstrap-filestyle input-group">
                <span class="group-span-filestyle input-group-btn" tabindex="0">
                <label for="filestyle-0" class="btn btn-success ">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                 <span class="buttonText">Buscar</span>
                 </label></span><input type="text" class="form-control " placeholder="No ha seleccionado archivos aún" disabled=""> </div>
                
        </div>  
         
          <div class="form-group has-feedback">
                <input class="btn btn-primary" id="btnenviar_solicitud" type="submit" value="Enviar Informe">
         </div>
         </form>
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