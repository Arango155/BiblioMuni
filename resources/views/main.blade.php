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

        <div class="carousel">
            <div class="carousel-images">

                <img src="https://lh3.googleusercontent.com/p/AF1QipN8ZfdZxWcomjINYpVwpDAenfLViTiPsmmRgg-j=s1360-w1360-h1020" alt="Imagen 1">
                <img src="https://lh3.googleusercontent.com/p/AF1QipMOKDzfvKcrUnHZGjRxtY3-oN4BvqK_x34bUCZE=s1360-w1360-h1020" alt="Imagen 2">
                <img src="https://lh3.googleusercontent.com/p/AF1QipP83lv544M9CSXQYUcO4WBD5jquvhr8w8KA7fM2=s1360-w1360-h1020" alt="Imagen 3">
                <img src="https://lh3.googleusercontent.com/p/AF1QipOKsG1HuOb4K8TnTO1lstsDY044eCWlMPnpE8OC=s1360-w1360-h1020" alt="Imagen 4">

            </div>
            <button class="carousel-button prev" onclick="prevSlide()">&#10094;</button>
            <button class="carousel-button next" onclick="nextSlide()">&#10095;</button>
        </div>

        <div class="espacio"></div>

        <h4>Puedes leer los libros aqui! 👇🏽</h4>
        <br>
        <div id="map"></div>
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
