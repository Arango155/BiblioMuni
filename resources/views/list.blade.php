@extends('templates.adminbase')

@section('menu')
<?php $lista = []; $list = []; $list3 = []; ?>
@foreach($items as $item)
    <div class="menu" id="menu">
        <label for="">
            <i onclick="closeMenu()" class="bi bi-arrow-bar-right"></i>
        </label>
        <div class="submenu">
            <h1 id="menu-nombre"></h1>
            <hr>
            <h3 id="menu-autor"></h3>
            <h3 id="menu-categoria"></h3>
            <h4>Descripción: </h4>
            <hr>
            <div class="descripcion">
                <h5 id="menu-descripcion"></h5>
            </div>
            <div class="submenu-img">
                <img id="menu-img" src="" alt="">
            </div>
        </div>
    </div>
@endforeach
@endsection

@section('body')

<!-- Asegúrate de tener un contenedor con el ID 'app' para que Vue lo monte -->
<div id="app">

<card-element></card-element>

    <div class="row">
        
    @foreach($items as $item)
    
    <card-element :item='{!! json_encode($item) !!}'></card-element>

 
@endforeach

    </div>
</div>

<script>
    function closeMenu() {
        document.getElementById('menu').style.width = '0';
    }
</script>

@endsection

@section('footer')
@endsection
