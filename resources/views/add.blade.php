@extends('templates/adminbase')



@section('body')

<div class="container">
    <div class="add">
        <h3>Agregar nuevo libro</h3>
        <p>Asegurate de no agregar un libro con el mismo codigo</p>
<div class="form">
    <p class="card-text">
            <form action="store" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">Codigo</label>
                <input type="text" name="id"  class="form-control" required>
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Autor</label>
                <input type="text" name="autor" class="form-control" required>
                <label for="">Categoria</label>
                <select name="categoria_id" class="form-control" required>
                    <option value="">Seleccione una categoria</option>
                    @foreach($categoriaitem as $object)
                    <option value="{{ $object->id }}">{{ $object->nombre }}</option>
                    @endforeach
                        </select>
        <label for="">Estado</label>
                <select name="estado_id" class="form-control" required>
                    <option value="">Seleccione el estado actual del libro</option>
                    @foreach($estado as $estado)
                    <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                    @endforeach
                </select>
        <label for="">Descripcion</label>
        <input type="text" name="descripcion" class="form-control" required>
                <label for="">Imagen (opcional) </label>
                <input type="file" name="img" class="form-control">

                <br>
                <a href="libros" class="btn btn-primary">
                    <span class="bi bi-arrow-return-left"></span>
                </a>
                <button class="btn btn-primary">
                    <span class="bi bi-check"></span>
                </button>

            </form>

            </p>

        </div>
    </div>

</div>
@endsection
