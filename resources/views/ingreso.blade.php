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
                                    <h5>Llenar Solicitud
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
 
 <!-- Estado del formulario de ingreso
  -->

<form>

      <div class="row">
      <div class="col-sm-6 col-md-6">
      <div class="form-group">
        <label for="identificacion">Cedula o Ruc</label>
        <input type="text" class="form-control" id="identificacion" aria-describedby="emailHelp" placeholder="Ingrese cédula (sin guión Ejemplo: 1234567897) ">
      </div>
      </div>
      <div class="col-sm-6 col-md-6">
      <div class="form-group">
        <label for="identificacion">Clave Catastral</label>
        <input type="text" class="form-control" id="identificacion" aria-describedby="emailHelp" placeholder="Ingrese RUC">
      </div>
      </div>
        
      
      
      </div>

      <div class="row">
        <div class="col-sm-6 col-md-6">
          <div class="form-group">
            <label for="iepi">Documento IEPI</label>
            <div class="form-group has-feedback">
                <input name="archivo_1" type="file" class="filestyle" data-showupload="false" data-input="true" data-buttonname="btn-success" required="" data-buttontext="Buscar" data-iconname="fa fa-certificate" data-buttonbefore="true" data-placeholder="No ha seleccionado archivos aún" id="filestyle-0" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);">
                <div class="bootstrap-filestyle input-group">
                <span class="group-span-filestyle input-group-btn" tabindex="0">
                <label for="filestyle-0" class="btn btn-success ">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                 <span class="buttonText">Buscar</span>
                 </label></span><input type="text" class="form-control " placeholder="No ha seleccionado archivos aún" disabled=""> </div>
                <p style="font-size: 10px; color: red;"> Formato en pdf (No máximo a 8 mb)</p>
        </div>
        </div>
        </div>  
        <div class="col-sm-6 col-md-6">
          <div class="form-group">
        <label for="iepi">Patente Municipal</label>
        <div class="form-group has-feedback">
                <input name="archivo_1" type="file" class="filestyle" data-showupload="false" data-input="true" data-buttonname="btn-success" required="" data-buttontext="Buscar" data-iconname="fa fa-certificate" data-buttonbefore="true" data-placeholder="No ha seleccionado archivos aún" id="filestyle-0" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);">
                <div class="bootstrap-filestyle input-group">
                <span class="group-span-filestyle input-group-btn" tabindex="0">
                <label for="filestyle-0" class="btn btn-success ">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                 <span class="buttonText">Buscar</span>
                 </label></span><input type="text" class="form-control " placeholder="No ha seleccionado archivos aún" disabled=""> </div>
                <p style="font-size: 10px; color: red;"> Formato en pdf (No máximo a 8 mb)</p>
        </div>
        </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <div class="form-group">
            <label for="iepi">Permiso Cuerpo de Bomberos</label>
            <div class="form-group has-feedback">
                <input name="archivo_1" type="file" class="filestyle" data-showupload="false" data-input="true" data-buttonname="btn-success" required="" data-buttontext="Buscar" data-iconname="fa fa-certificate" data-buttonbefore="true" data-placeholder="No ha seleccionado archivos aún" id="filestyle-0" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);">
                <div class="bootstrap-filestyle input-group">
                <span class="group-span-filestyle input-group-btn" tabindex="0">
                <label for="filestyle-0" class="btn btn-success ">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                 <span class="buttonText">Buscar</span>
                 </label></span><input type="text" class="form-control " placeholder="No ha seleccionado archivos aún" disabled=""> </div>
                <p style="font-size: 10px; color: red;"> Formato en pdf (No máximo a 8 mb)</p>
        </div>
        </div>
        </div>  
        <div class="col-sm-6 col-md-6">
        <div class="form-group">
        <label for="iepi">Permiso Centro de salud</label>
        <div class="form-group has-feedback">
                <input name="archivo_1" type="file" class="filestyle" data-showupload="false" data-input="true" data-buttonname="btn-success" required="" data-buttontext="Buscar" data-iconname="fa fa-certificate" data-buttonbefore="true" data-placeholder="No ha seleccionado archivos aún" id="filestyle-0" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);">
                <div class="bootstrap-filestyle input-group">
                <span class="group-span-filestyle input-group-btn" tabindex="0">
                <label for="filestyle-0" class="btn btn-success ">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                 <span class="buttonText">Buscar</span>
                 </label></span><input type="text" class="form-control " placeholder="No ha seleccionado archivos aún" disabled=""> </div>
                <p style="font-size: 10px; color: red;"> Formato en pdf (No máximo a 8 mb)</p>
        </div>
      </div>
        </div>          
      </div>
      
      <div class="row"> 
          <div class="col-sm-3 col-md-3">
            <div class="form-group">
              <label for="exampleSelect1">Zona</label>
              <select class="form-control" id="exampleSelect1">
                <option disabled="" selected="">Escoja una opcion</option>
                <option value="1">Urbana</option>
                <option value="2">Rural</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label for="exampleSelect1">Tipo de Establecimiento</label>
              <select class="form-control" id="exampleSelect1">
                <option disabled="" selected="">Escoja una opcion</option>
                <option value="1">Alojamiento Hotelero</option>
                <option value="2">Alojamiento no Hotelero</option>
                <option value="2">Agencia de viajes</option>
                <option value="2">Comercio</option>
                <option value="2">Hipódromos</option>
                <option value="2">Establecimiento de comida</option>
                <option value="2">Playero</option>
                <option value="2">Servicio de recreacion, diversion, eparcimiento o de reuniones</option>
                <option value="2">Transporte Turistico de pasajero</option>
              </select>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="form-group">
              <label for="exampleSelect1">Tipo</label>
              <select class="form-control" id="exampleSelect1">
                <option disabled="" selected="">Escoja una opcion</option>
                <option value="1">Hoteles</option>
                <option value="2">Hoteles Apartamentos</option>
                <option value="3">Hostales</option>
                <option value="4">Hosterias, hacienda turisticas y lodge</option>
                <option value="5">Resort</option>
                <option value="6">Refugio, campamento turistico, casa de huespedes</option>
              </select>
            </div>
          </div>

          <div class="col-sm-4 col-md-4">
            <div class="form-group">
              <label for="exampleSelect1">Hoteles</label>
              <select class="form-control" id="exampleSelect1">
                <option disabled="" selected="">Escoja una opcion</option>
                <option value="1">Lujo</option>
                <option value="2">Primera</option>
                <option value="3">Segunda</option>
                <option value="4">Tercera</option>
                <option value="4">Cuarta</option>
              </select>
            </div>
          </div>
          <div class="col-sm-2 col-md-2">
            <div class="form-group">
              <label for="habita">Habitaciones</label>
              <input type="number" class="form-control" id="habita">
          </div>
          </div>



      </div>
      
    
    
      <div class="form-group has-feedback">
                <input class="btn btn-primary" id="btnenviar_solicitud" type="submit" value="Enviar solicitud">
         </div>

        </form>



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