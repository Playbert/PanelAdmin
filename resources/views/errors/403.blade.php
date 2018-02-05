<!DOCTYPE html>
<html lang="en">
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <!-- Meta, title, CSS, favicons, etc. -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Panel Administrativo</title>

   <!-- Bootstrap -->

  <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap-social.css') }}" rel="stylesheet">
   <!-- Font Awesome -->

   <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
   <!-- iCheck -->
   <link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
 

   <!-- Custom Theme Style -->
   <link href="{{ asset ('build/css/custom.min.css') }}" rel="stylesheet">
 </head>
    <!-- page content -->
      

   <!-- jQuery -->
   <script src="{{ asset('vendors/jquery/dist/jquery.min.js')}}"></script>
   <!-- Bootstrap -->
   <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
   <!-- Custom Theme Scripts -->
   <script src="{{ asset('build/js/custom.min.js')}}"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- page content -->
        <div class="col-md-12">
          <div class="col-middle">
            <div class="text-center text-center">
              <h1 class="error-number">403</h1>
              <h2>Accesso Denegado</h2>
              <p>Usted no esta autorizado para acceder a este sitio.</p>
              <div class="mid_center">
                <a type="button" class="btn btn-success btn-xs" href="{{ url('/home') }}">Regresar</a>
               
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>