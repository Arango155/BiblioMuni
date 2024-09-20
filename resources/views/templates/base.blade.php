<!doctype html>
<html lang="en">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="https://mapasdeguatemala.com/wp-content/themes/wp-bootstrap-starter/map_app/image/adds/Municipalidad%20de%20Puerto%20Barrios.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BiblioMuni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- -->

</head>
<body id="body">




<!--nav section-->

    <nav class="">

      @yield('menu')
        <div class="nav-content">

            <div class="left">

                   <div class="title">
                       <a href="/">
                        <span>
                             <img src="https://images.emojiterra.com/twitter/v13.1/512px/1f4da.png" width="75px" height="75px">
                            BiblioMuni</span>
                       </a>

                       <a onclick="darkMode()" id="dark">
          <span>

            <i class="bi bi-moon" id="icon"></i>
          </span>
                       </a>
                   </div>




            </div>

            <div class="right">

                @yield('right')



            </div>



    </nav>




<div class="container">
    @yield('body')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



@yield('footer')
</div>
</div>
</div>
<div class="space"></div>
<footer>
    <div class="contact">

        <a href="https://github.com/Arango155" target="_blank">
            <i class="bi bi-github"></i>
        </a>
        <a
            href="https://www.linkedin.com/in/josue-arango-289b03198/"
            target="_blank"
        >
            <i class="bi bi-linkedin"></i>
        </a>

        <a href="https://arangoportfolio.netlify.app/">
            <i class="bi bi-file-earmark-person-fill"></i>
        </a>

    </div>

    <br>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<script src="{{ asset('js/app.js') }}"></script>

<!--<script src="{{ asset('css/app.js') }}"></script>-->


</body>


</html>
