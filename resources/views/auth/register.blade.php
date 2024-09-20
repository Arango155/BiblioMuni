@extends('layouts.app')

@section('content')



<div class="content">
    <h1>Registrate</h1>
    <p>Comienza tu experiencia en el mundo de la lectura</p>
</div>


            <div class="add">

                <div class="form">
                    <p id="table2" class="card-text">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <label for="">Nombre</label>
                                <input placeholder="Ingresa tu nombre..." id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus maxlength="7">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <label for="">Correo Electronico</label>
                                <input placeholder="Ingresa tu correo electronico..." id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <label for="">Contraseña</label>
                                <input placeholder="Ingresa tu contraseña..." id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <label for="">Confirmar contraseña</label>

                                <input  placeholder="Confirma tu contraseña..."  id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        <br>

                        <div style="align-content: center">
                            <div class="sign">
                                <span>Ya tienes una cuenta? <a href="login">Inicia sesion</a></span>
                            </div>
                        </div>
                        <br>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </p>
                </div>
            </div>

@endsection
