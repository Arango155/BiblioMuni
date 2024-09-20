@extends('templates/adminbase')



@section('title','Agregar nueva categoria')

@section('body')

<div class="container">
    <div class="add">
            <h3>Agregar categoria</h3>
        <p>Asegurate de no agregar una categoria con el mismo codigo</p>
        <div class="form">

            <p class="card-text">
            <form action="storeC" method="POST">
                @csrf
                <label for="">Codigo de la Categoria</label>
                <input type="text" name="id" class="form-control" required>
                <label for="">Nombre de la Categoria</label>
                <input type="text" name="nombre" class="form-control" required>

                <br>
                <a href="categorias" class="btn btn-primary">
                    <span class="bi bi-arrow-return-left"></span>
                </a>
                <button class="btn btn-primary">
                    <span class="bi bi-check"></span>Agregar
                </button>

            </form>

            </p>

        </div>
    </div>
</div>

@endsection
