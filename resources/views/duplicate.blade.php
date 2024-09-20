@extends('templates/adminbase')



@section('menu')

<!-- Your code to display item properties -->
<div class="menud" id="menu">
    <a class="close" onclick="closeMenu()" href="javascript:void(0)"><i class="bi bi-x"></i></a>
    <label for="">
        <h4>{{$item->nombre}}</h4>
    </label>
    <hr>
    <label for="">
        {{$item->categoria->nombre}}
    </label>

    <label for="">
        Description:
    </label>

</div>
<!-- ... other code ... -->


@endsection




@section('body')



<div class="head">

    <form action="{{route('buscar')}}" method="GET">
        <div class="btn-group">
            <input type="text" name="search" placeholder="Buscar..." class="form-control" value="">
            <button type="submit"class="btn btn-primary"><i class="bi bi-search"></i>
            </button>
        </div>
    </form>





    <div class="searching">
        <div class="left">
            <div>      <a  class="btn btn-primary" href="list">
                    <span class="bi bi-arrow-clockwise" ></span>
                </a>
            </div>

        </div>



        <div class="right">
            <div class="filtros">
                <form>
                    <span>Filtros</span>
                    <i class="bi bi-filter"></i>
                </form>
            </div>
        </div>
    </div>

</div>

<div class="size">
    <div class="row"> @foreach($items as $item)
        <div class="col space">
            <div class="card element" >
                <img  src="storage/app/public/images/{{$item->img}} " class="card-img-top" alt="Imagen de libro">
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

                        <a href="{{route('menu',$item->id)}}" onclick="openMenu()"  id="{{$item->id}}" class="btn btn-primary">Consultar</a>



                    </div>
                </div>

            </div>
        </div>


        @endforeach
    </div>





    @endsection

    @section('footer')

    @endsection
