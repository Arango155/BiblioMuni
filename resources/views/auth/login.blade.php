@extends('layouts.app')

@section('content')
<div class="container">
    <div class="add">

            <div id="table2" class="card">
<div class="login">
                <h3 class="center">Iniciar Sesion</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                                <input placeholder="Correo electronico" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Estas credenciales no coinciden con nuestros registros.</strong>
                                    </span>
                                @enderror

                        <br>



                                <input placeholder="Contraseña" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Estas credenciales no coinciden con nuestros registros.</strong>
                                    </span>
                                @enderror
                        <br>

<!--                                <div class="form-check">-->
<!--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>-->
<!---->
<!--                                    <label class="form-check-label" for="remember">-->
<!--                                        {{ __('Remember Me') }}-->
<!--                                    </label>-->
<!---->
<!--                        </div>-->

                        <br>
                                <button type="submit" class="btn btn-primary">
                                    Iniciar sesión
                                </button>
                        <hr>


                        <br>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                       Olvidaste tu contraseña?
                                    </a>
                                @endif

                        <div class="sign">
                            <span>No tienes una cuenta? <a href="register">Registrate!</a></span>
                        </div>


                        </div>
                    </form>

</div></div>
@endsection
