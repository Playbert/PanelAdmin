@extends('layouts.estilos')
<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
          
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">

                        <h1>DEVRRHH</h1>
                 
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div>
                                    <input id="email" type="email" class="form-control" placeholder="Username" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div>
                                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Recordarme
                                </label>
                            </div>
                            
                            <div>
                                <a class="reset_pass" href="{{ url('/password/reset') }}">¿Olvidaste tu Contraseña?</a>
                          
                                <button type="submit" class="btn btn-default submit">Iniciar Sesión</button>
                                
                                <a href="{{ url('social/facebook') }}" class="btn btn-block btn-social btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-facebook']);"> <span class="fa fa-facebook"></span> Iniciar sesión con Facebook</a>

                                <a href="{{ url('social/google') }}" class="btn btn-block btn-social btn-google" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-google']);"><span class="fa fa-google"></span> Iniciar sesión con Google</a>
                            </div>
         
                        <div class="clearfix"></div>
                        <div class="separator">
                            <p class="change_link">
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                              <h1><i class="fa fa-paw"></i> DEVRRHH</h1>
                              <p>©2017 Todos los Derechos Reservados. Devrrhhh!. Privacidad y términos</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>
