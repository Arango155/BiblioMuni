@extends('templates/adminbase')



@section('menu')
<?php
$lista=[];
$list=[];
$list3=[];

?>
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
     <h4>Descripcion: </h4>
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



    <div class="head">






<div class="searching">
    <div class="left">
        <div>      <a  class="btn btn-primary" href="list">
                <span class="bi bi-arrow-clockwise" ></span>
            </a>
        </div>

    </div>



    <div class="right">
        <div onclick="openMenu2()" class="filtros">
            <form>
                <span >Filtros</span>
                <i class="bi bi-filter"></i>
            </form>
        </div>
    </div>
</div>

</div>

<div class="size">

    <div class="menu2" id="menu2">


        <span for="">
            <i onclick="closeMenu2()" class="bi bi-x-circle"></i>

        </span>



<span>

            <form action="{{route('buscar')}}" method="GET">
                                    <div class="btn-group">
                                        <input type="text" name="search" placeholder="Buscar..." class="form-control" value="">
                                        <button type="submit"class="btn btn-primary"><div class="bi bi-search"></div>
                                        </button>
                                    </div>
            </form>
</span>

        <br>

        <label for="">
            <div class="hover-div">
  <span class="bi bi-bookmark" onclick="showC()"> Categoria


               <i id="arrowc" class="right bi bi-arrow-right"></i>

            </span>


            </div>

        </label>
        <div  id="submenu" class="hidden-div">
            @foreach($libros as $item)
            <?php
            $categoria=$item->categoria->nombre;
            $lista[$categoria]=$categoria;
            ;?>
            @endforeach
            @foreach($lista as $object)
            <a href="{{ route('look', ['object' => $object]) }}" type="submit">{{$object}}</a><br>
            @endforeach
        </div>




        <label for="">
            <div class="hover-div">

                <span class="bi bi-person" onclick="showA()"> Autor
              <i id="arrowa" class="right bi bi-arrow-right"></i>
            </span>


            </div>

        </label>
        <div id="submenu2" class="hidden-div">

            @foreach($libros as $item)
            <?php
            $author = $item->autor;

            // Check if $author already exists in $list before adding it

            $list[$author] = $author;

            ?> @endforeach

            <?php


            ?>
            @foreach($list as $object)
            <a href="{{route('buscar_Autor',$object)}}" type="submit">{{$object}}</a><br>
            @endforeach
        </div>

        <label for="">
            <div class="hover-div">


                <span class="bi bi-check" onclick="showE()"> Estado
              <i id="arrowe" class="right bi bi-arrow-right"></i>
            </span>


            </div>

        </label>
        <div  id="submenu3" class="hidden-div">

            @foreach($libros as $item)
            <?php
            $state=$item->estado->nombre;

            $list3[$state]=$state;
            ?>
            @endforeach
            @foreach($list3 as $object)
            <a href="{{route('buscar_Estado',$object)}}" type="submit">{{$object}}</a><br>
            @endforeach
        </div>



    </div>

    <div class="row"> @foreach($items as $item)
    <div class="col space">
        <div class="card element" >
            <img  src="images/{{$item->img}} " class="card-img-top" alt="Imagen de libro">
            <div class="card-body">
                <h3 class="card-title">{{$item->nombre }}</h3>
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


    <a onclick="openMenu('{{ $item->nombre }}','{{ $item->autor }}', '{{ $item->categoria->nombre }}', '{{ $item->descripcion }}','{{ $item->img }}')" class="btn btn-primary separate">Consultar</a>




</div>


            </div>

        </div>
    </div>


    @endforeach
</div>


    <script>
        function openMenu(nombre, autor, categoria, descripcion, img) {
            document.getElementById('menu-nombre').innerText = nombre;
            document.getElementById('menu-autor').innerText = autor;
            document.getElementById('menu-categoria').innerText = categoria;
            document.getElementById('menu-descripcion').innerText = descripcion;
            document.getElementById('menu-img').src = "images/" + img; // Use 'src' instead of 'innerLink'
            document.getElementById('menu').style.width = '100%';
        }

        function closeMenu() {
            document.getElementById('menu').style.width = '0';
        }
    </script>


@endsection

@section('footer')

@endsection
