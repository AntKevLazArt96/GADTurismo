@extends('master')

@section('title', 'TURISMO')

@section('content')
	                <div class="wrapper wrapper-content animated fadeInRight">           
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>lISTADO DE SOLICITUDES
 </h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        
                                         
                                    </div>
                                </div>
                                <div class="ibox-content" class="container">
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
<div class="row">
  <div class="col-sm-6">
    <form method="get" action="/clave" accept-charset="UTF-8" role="form" class="form-horizontal" id="frm"><input name="_token" type="hidden" value="v64O6meAlcU85kqKs5MSOjMRWq8qkscxrX8LStP8">
      
    <div class="search-form">    
            <div class="input-group"> 
                <input class="form-control input-lg" placeholder="Ingrese Clave Catastral (Sin gui&oacute;n Ejemplo: 1183220000)" onkeypress="return val(event)" name="txtclave" type="text">
                <input id="tipobuscar" name="tipobuscar" type="hidden" value="">
                <div class="input-group-btn">
                <input class="btn btn-lg btn-primary" id="btnbuscar" type="submit" value="Buscar">
                 </div>
            </div>    
    </div>

    </form>
    </div>
    <div class="col-sm-6" id="divpropiedades">

    </div> <!-- COL-->
</div> <!-- row -->
<br>

	<div id="gif_cargando" align="center">  
	 <img src="http://ciudadanodigital.manta.gob.ec/local/public/cargando.gif"  style="position: absolute: top:100px; width: 10%;"/>
	 <p>  Cargando...</p>
	</div>
	<div id="divconsulta">
	</div>


 <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header"> 
      <h2 class="modal-title"><center>Hacer Solicitud</center></h2>
      </div>
      <div class="modal-body" data-spy="scroll" data-target=".bs-docs-sidebar" >
 <div class="form-group">

 <form>
		  <div class="form-group">
		    <label for="identificacion">Cedula o Ruc</label>
		    <input type="text" class="form-control" id="identificacion" aria-describedby="emailHelp" placeholder="Ingrese cédula (sin guión Ejemplo: 1234567897) ">
		  </div>
		  <div class="row">
		  	<div class="col-sm-6 col-md-6">
			  	<div class="form-group">
				    <label for="iepi">Documento IEPI</label>
				    <input type="file" class="form-control-file" id="iepi" aria-describedby="fileHelp">
				    <small id="fileHelp" class="form-text text-muted">Debe elegir un archivo PDF de 5mb Máximo</small>
				</div>
		  	</div>	
		  	<div class="col-sm-6 col-md-6">
			  	<div class="form-group">
		    <label for="iepi">Patente Municipal</label>
		    <input type="file" class="form-control-file" id="iepi" aria-describedby="fileHelp">
		    <small id="fileHelp" class="form-text text-muted">Debe elegir un archivo PDF de 5mb Máximo</small>
		  </div>
		  	</div>
		  	<div class="col-sm-6 col-md-6">
			  	<div class="form-group">
				    <label for="iepi">Permiso Cuerpo de Bomberos</label>
				    <input type="file" class="form-control-file" id="iepi" aria-describedby="fileHelp">
				    <small id="fileHelp" class="form-text text-muted">Debe elegir un archivo PDF de 5mb Máximo</small>
				</div>
		  	</div>	
		  	<div class="col-sm-6 col-md-6">
			  	<div class="form-group">
		    <label for="iepi">Permiso Centro de salud</label>
		    <input type="file" class="form-control-file" id="iepi" aria-describedby="fileHelp">
		    <small id="fileHelp" class="form-text text-muted">Debe elegir un archivo PDF de 5mb Máximo</small>
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
		  
		
		<div class="modal-footer">
      <enter> 
            <button type="submit" class="btn btn-primary">Aceptar</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnSig2">Cancelar</button>         
        
      </enter>       
      </div>

        </form>
    </div>
  </div> 
</div>
      




                                </div>
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