
@extends('templates.base')

@section('right')
<div class="links">
    <a class="btn btn-dark"  href="{{ route('login') }}">Iniciar sesion</a>
    <a class="btn btn-dark"  href="{{route('register')}}">Registrate</a>
</div>
@endsection




@section('body')



    <div class="content">
        <h1>Consultoria en linea</h1>
        <p>"Desbloquee conocimientos, un clic a la vez: ¡su biblioteca, a su manera! "</p>
        <form action="register">

            <button class="btn btn-primary">Comienza ahora!</button>
        </form>

        <div class="video">

        </div>

        <div class="espacio"></div>

       <div id="carrusel">
        <carrusel-component></carrusel-component>
       </div>

        <div class="espacio"></div>

        <h4>Puedes leer los libros aqui! 👇🏽</h4>
        <br>

        <div id="map-component">
        <mapa-component></mapa-component>
        </div>
        
        <script>

            function iniciarMap(){
                var coord = {lat:15.734382 ,lng:-88.596939};
                var map = new google.maps.Map(document.getElementById('map'),{
                    zoom: 10,
                    center: coord
                });
                var marker = new google.maps.Marker({
                    position: coord,
                    map: map
                });
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>






</div>

@endsection
