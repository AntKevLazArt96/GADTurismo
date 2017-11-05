<!DOCTYPE html>
<html lang="es-EC" class="no-js" data-device-type="dedicated">
    <head>
        

 

<title>Departamento TICS GAD MANTA | Acceso al Sistema</title> 

    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/bootstrap.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/font-awesome/css/font-awesome.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/animate.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/style.css">


   

    <link rel="icon" href="http://manta.gob.ec/templates/shaper_maxima/images/presets/preset1/logo.png" sizes="32x32" />
 


 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui, shrink-to-fit=no" />

<meta name="csrf-token" content="MtyEaxuY17wLv327PaIKHL4ZNPegpiTTcEEiDT1S" />
 


<style id="antiClickjack">
    html.js body {display: none !important;}
</style>
 


<link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/login.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/login2.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://ciudadanodigital.manta.gob.ec/admin/plantilla/css/login3.css">



</head>    
    <body class="row-fluid row hero-bg lightContent reverseLink holiday-hero">

        
        
<div id="body" class="">




 



<div role="main" id="main" class="containerMobileFullWidth">
    

 
    

        
        <div class=" span9 hidden-xs hidden-sm" >
            <img src="http://manta.gob.ec/templates/shaper_maxima/images/presets/preset1/logo.png" alt=""> 
            <br><br>
            <p class="contentPara" style="
    padding: 60px;
    font-size: 45px;">Ciudadano Digital <br> <span>Portal de trámites en línea.</span></p>

    
 
        </div>

        <div class=" span3 col-sm-12" style="background: rgba(0, 0, 0, 0.28);width: 25.5%;">
              <br> 
              <div class="middle-box text-center loginscreen animated fadeInDown">
            
                 
                 
                 <p class="contentPara" style="font-size: 45px;text-transform: uppercase;">Bienvenido</p>



               
                                                                                                         
                <p class="contentPara">Ingrese su cédula y contraseña.</p>

               

                <form action="{{route('login')}}" method="post">
                {{ csrf_field() }}
                    <div class="form-group" style="text-align: center;">
<!--input type="text" class="form-control" name="cedula_ruc" placeholder="Ingrese número de cédula" style="text-align: center;" onkeypress="return val(event)" maxlength="15"-->
                     @if ($errors->has('cedula'))
                                    

                                                              <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <ul>
                            <li>{{ $errors->first('cedula') }}</li>
                            <li>{{ $errors->first('password') }}</li>
                    </ul>
    </div>

                                @endif


                    <input class="form-control" placeholder="Ingrese n&uacute;mero de c&eacute;dula" style="text-align: center" name="cedula" type="text">
                    </div>
                    
                  

                    <div class="form-group" style="text-align: center;">
                        <input type="password" class="form-control" name="password"  placeholder="Ingrese su contraseña" style="text-align: center;">
                           
                    </div>

                    <div class="form-group" style="text-align: center;">
                        <button type="submit" class="btn btn-sm btn-primary btn-block" style="    margin: 0px;background-color: #045f8a;border-color: #25718a;color: #FFFFFF;">Ingresar</button>

                           
                    </div>
                    

                    
                    

                    <a style="font-size: 16px;color: white;" href="http://ciudadanodigital.manta.gob.ec/contrasena"><small>¿Olvidé mi contraseña?</small></a>
                    <br>
                    <a style="font-size: 16px;color: white;" href="{{route('register')}}"><small>¿No tienes cuenta todavía?</small></a>
                    <p></p>
                     

                    <a class="btn btn-block btn-link" href="{{route('register')}}" style="background-color: #045f8a;border-color: #25718a;color: #FFFFFF;">Regístrate</a> 
                    <a style="font-size: 16px;color: white;" href="http://ciudadanodigital.manta.gob.ec/reenviarcorreo"><small>Reenviar correo de verificación</small></a>
                </form>
                

                
 

            <br>
        </div>

        </div>
        <p></p>
        <div class=" span12  hidden-xs  hidden-sm">
             
           <p style="text-align: center;"> <img src="./local/public/administracion.png" alt=""></p>
        </div>

        
    


   
 

</div>
   </div>

 

<!-- Mainly scripts -->
    <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/jquery-2.1.1.js"></script>

    <script src="http://ciudadanodigital.manta.gob.ec/admin/plantilla/js/bootstrap.min.js"></script>

  
    <script type="text/javascript">
        function valop(e) {
            tecla = (document.all) ? e.keyCode : e.which;
            if (tecla==20) return true;
            var patron =/[0-9A-Za-z_]/;
            var te = String.fromCharCode(tecla);
            return patron.test(te);
        }
    </script>

</body>
</html>


