@extends('templates/adminbase')

@section('body')

<div class="container">

    <div class="tab">


            <p class="card-text">

            <form class="col-sm-12" action="{{route('show', $item->id)}}" method="POST">
            <h3>Editar categoria</h3>
                @csrf
                @method("PUT")

                <label for="">ID</label>
                <input type="text" name="id" class="form-control" required value="{{$item->id}}" readonly>

                <label for="">Nombre de la categoria</label>
                <input type="text" name="nombre" class="form-control" required value="{{$item->nombre}}">

                <br>
                <a href="categorias" class="btn btn-primary">
                    <span class="bi bi-arrow-return-left"></span>
                </a>
                <button type="submit" class="btn btn-primary">
                    <span  class="bi bi-arrow-up-circle-fill"></span>
                </button>

            </form>

            </p>

        </div>
    </div>

</div>

@endsection
