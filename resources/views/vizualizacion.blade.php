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
                                    <h5>Vizualizacion de Datos de la solicitudes 
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
<!--
    <table id="detalles" class="table table-striped table-bordered table-hover display">
    <tbody>
    <tr style="font-size:15px;" '="">
    <th '=""><center>Nº de solicitud </center></th>
    <th><center> Cedula o ruc</center> </th>
    <th><center>Clave catastral</center></th>
    <th><center>Documento IEPI</center></th> 
    <th><center>Permiso Cuerpo de Bombero</center></th>
    <th><center> Patente Municipal</center> </th>   
    <th><center> Permiso de centro de salud</center> </th>
    <th><center>Zona</center></th>
    <th><center>Tipo de Establecimiento</center></th>
    <th><center>Tipo </center></th>
    <th><center>Hoteles </center></th>
    <th><center>Habitaciones</center></th>  
    <tr style="font-size:15px;" '="">
    <th '=""><center>53 </center></th>
    <th><center> 1314174819</center> </th>
    <th><center> 10007895</center> </th>
    <th><center onclick="window.location.href = 'https://1drv.ms/i/s!AhU_fZafR6Bx22xo6-cf_tI6jEZR';"> Certificado iep</center> </th>
    <th><center onclick="window.location.href = 'https://1drv.ms/i/s!AhU_fZafR6Bx226cnjFUYOHXiqDr';" > Prmiso</center> </th>
    <th><center onclick="window.location.href = 'https://1drv.ms/i/s!AhU_fZafR6Bx22_Lu-oSjoYfR4S4';">patente</span> </center></th>
    <th><center onclick="window.location.href = 'https://1drv.ms/i/s!AhU_fZafR6Bx23AxlQZOgue27zkF';"> certificado</center> </th>
    <th><center> Urbana</center> </th>
    <th><center> Alojamiento Hotelero</center> </th>
    <th><center> Hoteles</center> </th>
    <th><center> Lujo</center> </th>
    <th><center> 10</center> </th>
    <tr style="font-size:15px;" '="">
    <th '=""><center>94 </center></th>
    <th><center> 1314174819</center> </th>
    <th><center> 10007895</center> </th>
    <th><center onclick="window.location.href = 'https://1drv.ms/i/s!AhU_fZafR6Bx22xo6-cf_tI6jEZR';"> Certificado iep</center> </th>
    <th><center onclick="window.location.href = 'https://1drv.ms/i/s!AhU_fZafR6Bx226cnjFUYOHXiqDr';" > Prmiso</center> </th>
    <th><center onclick="window.location.href = 'https://1drv.ms/i/s!AhU_fZafR6Bx22_Lu-oSjoYfR4S4';">patente</span> </center></th>
    <th><center onclick="window.location.href = 'https://1drv.ms/i/s!AhU_fZafR6Bx23AxlQZOgue27zkF';"> certificado</center> </th>
    <th><center> Rural</center> </th>
    <th><center> Comercio</center> </th>
    <th><center> Resort</center> </th>
    <th><center> Tercera</center> </th>
    <th><center> 2</center> </th>
    <tr style="font-size:15px;" '="">
    <th '=""><center>68 </center></th>
    <th><center> 1314174819</center> </th>
    <th><center> 10007895</center> </th>
    <th><center onclick="window.location.href = 'https://1drv.ms/i/s!AhU_fZafR6Bx22xo6-cf_tI6jEZR';"> Certificado iep</center> </th>
    <th><center onclick="window.location.href = 'https://1drv.ms/i/s!AhU_fZafR6Bx226cnjFUYOHXiqDr';" > Prmiso</center> </th>
    <th><center onclick="window.location.href = 'https://1drv.ms/i/s!AhU_fZafR6Bx22_Lu-oSjoYfR4S4';">patente</span> </center></th>
    <th><center onclick="window.location.href = 'https://1drv.ms/i/s!AhU_fZafR6Bx23AxlQZOgue27zkF';"> certificado</center> </th>
    <th><center> Rural</center> </th>
    <th><center> Playero</center> </th>
    <th><center> Campamento Turistica</center> </th>
    <th><center> Tercera</center> </th>
    <th><center> 3</center> </th>
    

   </tbody>
   </table>COL-->

<form> 

      <div class="row">
      <div class="col-sm-6 col-md-6">
      <div class="form-group">
        <label for="identificacion">Cedula o Ruc</label>
         <div class="bootstrap-filestyle input-group">
                 </label></span><input type="text" class="form-control " placeholder="0802268619" disabled=""> </div>
      </div>
      </div>
      <div class="col-sm-6 col-md-6">
      <div class="form-group">
        <label for="identificacion">Clave Catastral</label>
         <div class="bootstrap-filestyle input-group">
                 </label></span><input type="text" class="form-control " placeholder="1110097" disabled=""> </div>
      </div>
      </div>
        
      
      
      </div>

      <div class="row">
        <div class="col-sm-6 col-md-6">
          <div class="form-group">
            <label for="iepi">Documento IEPI</label>
            <div class="form-group has-feedback">
                <div class="bootstrap-filestyle input-group">
                 </label><input type="text" class="form-control " placeholder="Certificado iep.pdf" disabled=""> 
                 </div>
                
        </div>
        </div>
        </div>  
        <div class="col-sm-6 col-md-6">
          <div class="form-group">
        <label for="iepi">Patente Municipal</label>
        <div class="form-group has-feedback">
                
                <div class="bootstrap-filestyle input-group">                
                 </label></span><input type="text" class="form-control " placeholder="patente.pdf" disabled=""> </div>
                
        </div>
        </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <div class="form-group">
            <label for="iepi">Permiso Cuerpo de Bomberos</label>
            <div class="form-group has-feedback">
                
                <div class="bootstrap-filestyle input-group">
               
                 </label></span><input type="text" class="form-control " placeholder="permiso.pdf" disabled=""> </div>
                
        </div>
        </div>
        </div>  
        <div class="col-sm-6 col-md-6">
        <div class="form-group">
        <label for="iepi">Permiso Centro de salud</label>
        <div class="form-group has-feedback">
               
               <div class="bootstrap-filestyle input-group">
                 </label></span><input type="text" class="form-control " placeholder="Permiso.pdf" disabled=""> </div>
              
        </div>
      </div>
        </div>          
      </div>
      
      <div class="row"> 
          <div class="col-sm-3 col-md-3">
            <div class="form-group">
              <label for="exampleSelect1">Zona</label>
              <div class="bootstrap-filestyle input-group">
                 </label></span><input type="text" class="form-control " placeholder="Urbana" disabled=""> </div>
                
              </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label for="exampleSelect1">Tipo de Establecimiento</label>
              <div class="bootstrap-filestyle input-group">
                 </label></span><input type="text" class="form-control " placeholder="Alojamiento Hotelero" disabled=""> </div>
                
              </div>
              
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="form-group">
              <label for="exampleSelect1">Tipo</label>
              <div class="bootstrap-filestyle input-group">
                 </label></span><input type="text" class="form-control " placeholder="Hoteles " disabled=""> </div>
              
            </div>
          </div>

          <div class="col-sm-4 col-md-4">
            <div class="form-group">
              <label for="exampleSelect1">Hoteles</label>
              <div class="bootstrap-filestyle input-group">
                 </label></span><input type="text" class="form-control " placeholder="Lujo " disabled=""> </div>
              
             </div>
          </div>
          <div class="col-sm-2 col-md-2">
            <div class="form-group">
              <label for="habita">Habitaciones</label>
               <div class="bootstrap-filestyle input-group">
                 </label></span><input type="text" class="form-control " placeholder="10 " disabled=""> </div>
              
          </div>
          </div>



      </div>
       </form>

    
      <div class="form-group has-feedback">
                <input class="btn btn-primary" id="btnenviar_solicitud" type="submit" value="nose">
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