
@extends('templates.base')

<head>
    <link rel="icon" href="https://mapasdeguatemala.com/wp-content/themes/wp-bootstrap-starter/map_app/image/adds/Municipalidad%20de%20Puerto%20Barrios.png">
</head>




@section('right')
<!-- Right Side Of Navbar -->

<div class="links">
    <!-- Authentication Links -->
    @guest
    @if (Route::has('login'))

        <a class="btn btn-dark"  href="{{ route('login') }}">Iniciar sesion</a>



    @endif

    @if (Route::has('register'))


    <a class="btn btn-dark"  href="{{route('register')}}">Registrate</a>

    @endif
</div>
    @else

<!--<div class="right-top">-->
<!--    <div class="nav-item dropdown">-->
<!--        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>-->
<!--            {{ Auth::user()->name }}-->
<!--        </a>-->
<!---->
<!--        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">-->
<!--            <a class="dropdown-item" href="{{ route('logout') }}"-->
<!--               onclick="event.preventDefault();-->
<!--                                                     document.getElementById('logout-form').submit();">-->
<!--                {{ __('Logout') }}-->
<!--            </a>-->
<!---->
<!--            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">-->
<!--                @csrf-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--    -->
<!--</div>-->
    @endguest

@endsection



@section('body')


<div id="app">

    <main class="py-4">
        @yield('content')
    </main>
</div>
</div>
@endsection
</html>
