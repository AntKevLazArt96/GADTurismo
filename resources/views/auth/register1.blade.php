<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Departamento TICS GAD MANTA | Registro</title> 

    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/bootstrap.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/font-awesome/css/font-awesome.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/animate.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/style.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plugins/iCheck/square/blue.css">


    <link rel="stylesheet" type="text/css" href="http://ciudadanodigital.manta.gob.ec/js/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

</head>

<body class="" style="background-color: #44a6d6;">

    <div class="middle-box text-center loginscreen animated fadeInDown" style="     width: 60%;max-width: 45%;"> 
        <div>
            <div>

                <h1 class="logo-name">  </h1>

            </div>
            <h3 style="font-size: 20px;color: white;text-transform: uppercase;"> <p class="text-registro">Servicios Digitales Manta</p>
</h3>
             
            
           
                   <div class="ibox-content2">
                           <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <ul>
                                @if ($errors->has('cedula'))   
                                                <li>{{ $errors->first('cedula') }}</li>
                                @endif  
                                @if ($errors->has('fecha_ci'))   
                                                <li>El campo Fecha Expedicion es requerido</li>
                                @endif     
                                @if ($errors->has('firstname'))    
                                                <li>{{ $errors->first('firstname') }}</li>
                                        </ul>
                                @endif  
                                @if ($errors->has('lasname'))    
                                                <li>{{ $errors->first('lasname') }}</li>
                                        </ul>
                                @endif
                                @if ($errors->has('phone'))    
                                                <li>{{ $errors->first('phone') }}</li>
                                        </ul>
                                @endif
                                @if ($errors->has('email'))    
                                                <li>{{ $errors->first('email') }}</li>
                                        </ul>
                                @endif
                                @if ($errors->has('password'))    
                                                <li>{{ $errors->first('password') }}</li>
                                        </ul>
                                @endif

                        </div>

                      




 <form method="POST" action="{{route('register')}}" >
 {{ csrf_field() }}
    
    <p style="font-size: 22px;color: #0086c7;">Ingrese sus datos para completar el registro</p>

    <div class="row">
        
        <div class="col-md-6">
            <label for="cedula">
            <span style="color: red;margin-bottom: 0px;font-size: 11px;font-style: italic;text-align: right;margin-top: 0px;" id="mensaje"></span>

            </label>
            <br>
            
            <input title="" data-placement="top" data-toggle="tooltip" class="form-control" placeholder="Cédula de identidad" id="cedula" onkeypress="return val(event)" maxlength="10" name="cedula" type="text" data-original-title="Sin guión, Ejemplo: 1303497801" value="{{ old('cedula') }}">
        </div>
        
        <div class="col-md-6">
            <br>
            <input title="Fecha expedición C.I. - Ejemplo: 05/11/2017" data-placement="top" data-toggle="tooltip" class="form-control" placeholder="Fecha de expedición C.I." id="fecha_ci" readonly="readonly" name="fecha_ci" type="text" value="{{ old('fecha_ci') }}">
        </div>
        
 
    </div>
    

    <div class="row">
        <div class="col-md-6">
         <br>
            <input id="firstname" title="Escriba sus dos nombres" data-placement="top" data-toggle="tooltip" class="form-control" placeholder="Nombres" onkeypress="return val2(event)" maxlength="100" id="firstname" name="firstname" type="text" value="{{ old('firstname') }}">

        </div>

        <div class="col-md-6">
        <br>
           <input id="lastname" title="Escriba sus dos apellidos" data-placement="top" data-toggle="tooltip" class="form-control" placeholder="Apellidos" onkeypress="return val2(event)" maxlength="100" id="lastname" name="lastname" type="text" value="{{ old('lastname') }}">
        </div>

    </div>


    <div class="row">
        <div class="col-md-6">
        <br>
        
            <input id="phone" title="Teléfono fijo o celular" data-placement="top" data-toggle="tooltip" class="form-control" placeholder="Número de teléfono" onkeypress="return val(event)" maxlength="10" name="phone" type="text" value="{{ old('phone') }}">
        </div>

        <div class="col-md-6">
        <br>
           <input class="form-control" placeholder="Correo electrónico" onkeypress="return val3(event)" maxlength="50" id="email" name="email" type="text" value="{{ old('email') }}">

        </div>

    </div>     
 
    <div class="row">
        <div class="col-md-6">
         <br>
            <input id="password" type="password" class="form-control awesome" name="password" placeholder="Escriba una contraceña">
        </div>

        <div class="col-md-6">
        <br>
          <input id="password-confirm" type="password" class="form-control awesome" name="password_confirmation" placeholder="Vuelva a escribir la contraceña">
        </div>
    </div>    
    <br>
    
      <div class="form-group has-feedback">
            <input class="btn btn-primary" id="btnregistro" type="submit" value="Registrar">
     </div>        
        
 
</form>



                   </div>

            <img src="http://ciudadanodigital.manta.gob.ec/administracion.png" alt="">
            <p class="m-t" style="font-size: 14px;color: white;"> <small>Dirección de TIC GAD MANTA &copy; 2017</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/jquery-2.1.1.js"></script>

    <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/bootstrap.min.js"></script>




     <script src="http://ciudadanodigital.manta.gob.ec/admin/plugins/iCheck/icheck.min.js"></script>

     <script type="text/javascript" src="http://ciudadanodigital.manta.gob.ec//js/bootstrap-datepicker/bootstrap-datepicker.js"></script>
     <script type="text/javascript" src="http://ciudadanodigital.manta.gob.ec//js/bootstrap-datepicker/locales/bootstrap-datepicker.es.js"></script>
     
     <script>

     

     $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
      
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional 
        });
      });

      function val(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        if (tecla==8) return true;
        var patron =/[0-9]/;
        var te = String.fromCharCode(tecla);
        return patron.test(te);
      }
      function val2(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        if (tecla==8) return true;
        var patron =/[A-Za-z\sñ]/;
        var te = String.fromCharCode(tecla);
        return patron.test(te);
      }
      function val3(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        if (tecla==8) return true;
        var patron =/[^\s]/;
        var te = String.fromCharCode(tecla);
        return patron.test(te);
      }
      function val4(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        if (tecla==8) return true;
        var patron =/[0-9\/]/;
        var te = String.fromCharCode(tecla);
        return patron.test(te);
      }

      $('#formulario').submit(function(){
        if (('#txtfecha').val()=="") {
          alert('no enviado');
          return false;
        }else{
          return true;
        }
      });



      $('#cedula').change(function(){
        var cedula = $('#cedula').val();

     //Preguntamos si la cedula consta de 10 digitos
     if(cedula.length == 10){
        
        //Obtenemos el digito de la region que sonlos dos primeros digitos
        var digito_region = cedula.substring(0,2);
        
        //Pregunto si la region existe ecuador se divide en 24 regiones
        if( digito_region >= 1 && digito_region <=24 ){
          
          // Extraigo el ultimo digito
          var ultimo_digito   = cedula.substring(9,10);

          //Agrupo todos los pares y los sumo
          var pares = parseInt(cedula.substring(1,2)) + parseInt(cedula.substring(3,4)) + parseInt(cedula.substring(5,6)) + parseInt(cedula.substring(7,8));

          //Agrupo los impares, los multiplico por un factor de 2, si la resultante es > que 9 le restamos el 9 a la resultante
          var numero1 = cedula.substring(0,1);
          var numero1 = (numero1 * 2);
          if( numero1 > 9 ){ var numero1 = (numero1 - 9); }

          var numero3 = cedula.substring(2,3);
          var numero3 = (numero3 * 2);
          if( numero3 > 9 ){ var numero3 = (numero3 - 9); }

          var numero5 = cedula.substring(4,5);
          var numero5 = (numero5 * 2);
          if( numero5 > 9 ){ var numero5 = (numero5 - 9); }

          var numero7 = cedula.substring(6,7);
          var numero7 = (numero7 * 2);
          if( numero7 > 9 ){ var numero7 = (numero7 - 9); }

          var numero9 = cedula.substring(8,9);
          var numero9 = (numero9 * 2);
          if( numero9 > 9 ){ var numero9 = (numero9 - 9); }

          var impares = numero1 + numero3 + numero5 + numero7 + numero9;

          //Suma total
          var suma_total = (pares + impares);

          //extraemos el primero digito
          var primer_digito_suma = String(suma_total).substring(0,1);

          //Obtenemos la decena inmediata
          var decena = (parseInt(primer_digito_suma) + 1)  * 10;

          //Obtenemos la resta de la decena inmediata - la suma_total esto nos da el digito validador
          var digito_validador = decena - suma_total;

          //Si el digito validador es = a 10 toma el valor de 0
          if(digito_validador == 10)
            var digito_validador = 0;

          //Validamos que el digito validador sea igual al de la cedula
          if(digito_validador == ultimo_digito){
            console.log('la cedula:' + cedula + ' es correcta');
            $('#mensaje').empty();
            $('#btnregistro').attr("disabled", false);
          }else{
            console.log('la cedula:' + cedula + ' es incorrecta');
            $('#mensaje').empty();
            $('#mensaje').append('Cédula incorrecta');
            $('#btnregistro').attr("disabled", true);
          }
          
        }else{
          // imprimimos en consola si la region no pertenece
          console.log('Esta cédula no pertenece a ninguna region');
          $('#mensaje').empty();
          $('#mensaje').append('Cédula incorrecta');
          $('#btnregistro').attr("disabled", true);
        }
     }else{
        //imprimimos en consola si la cedula tiene mas o menos de 10 digitos
        console.log('Esta cédula tiene menos de 10 Digitos');
        $('#mensaje').empty();
        $('#mensaje').append('Cédula incorrecta');
        $('#btnregistro').attr("disabled", true);
     }
      });
    </script>
    <script type="text/javascript">
          $('#fecha_ci').datepicker({
            format: "yyyy-mm-dd",
            startDate: "01/01/1970",
            endDate: "05/11/2017",
            clearBtn: true,
            language: "es",
            autoclose: true,
            todayHighlight: true,
            todayBtn: "linked"
          });

          $('#fecha_ci').css('cursor','hand');

          $(document).on('ready',function(){
              $('#fecha_ci').css('cursor','pointer');
              console.log('05-11-2017');
            });
    </script>

</body>

</html>