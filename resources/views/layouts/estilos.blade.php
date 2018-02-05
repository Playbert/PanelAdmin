<!DOCTYPE html>
<html lang="en">
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <!-- Meta, title, CSS, favicons, etc. -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>DEVRRHH</title>

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

<!-- validator -->
   <script src="{{ asset('vendors/validator/validator.js')}}"></script>
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>


</html>