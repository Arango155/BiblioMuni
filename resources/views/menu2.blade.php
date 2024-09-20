@extends('templates/adminbase')

@section('menu')
<div class="menu" id="menu">
    <label for="">
        <i onclick="closeMenu()" class="bi bi-arrow-bar-right"></i>
    </label>
    <h5 class="c">Consulta</h5>
    <hr>
    <label id="menu-nombre"></label>
    <label id="menu-autor"></label>
    <label id="menu-categoria"></label>
    <label for="">Descripcion:</label>
    <div class="descripcion">
        <span id="menu-descripcion"></span>
    </div>
</div>
@endsection

@section('body')
<div class="size">
    <div class="row">
        @foreach($items as $item)
        <div class="col space">
            <div class="card element">
                <img src="images/{{$item->img}} " class="card-img-top" alt="Imagen de libro">
                <div class="card-body">
                    <h3 class="card-title">{{$item->nombre}}</h3>
                    <h5 class="card-title">{{$item->categoria->nombre}}</h5>
                    <p class="card-text">Autor: {{$item->autor}}</p>

                    <div class="buttons">
                        @if($item->estado->id==1)
                        <button class="btn btn-success">Disponible</button>
                        @elseif($item->estado->id==2)
                        <button class="btn btn-warning">Ocupado</button>
                        @elseif($item->estado->id==3)
                        <button class="btn btn-danger">No disponible</button>
                        @endif

                        <a onclick="openMenu('{{ $item->nombre }}','{{ $item->autor }}', '{{ $item->categoria->nombre }}', '{{ $item->descripcion }}')" class="btn btn-primary separate">Consultar</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        function openMenu(nombre, autor, categoria, descripcion) {
            document.getElementById('menu-nombre').innerText = nombre;
            document.getElementById('menu-autor').innerText = autor;
            document.getElementById('menu-categoria').innerText = categoria;
            document.getElementById('menu-descripcion').innerText = descripcion;

            document.getElementById('menu').style.width = '100%';
        }

        function closeMenu() {
            document.getElementById('menu').style.width = '0';
        }
    </script>
    @endsection

    @section('footer')
    @endsection
