@extends('templates/adminbase')


@section('body')



<div class="container">
    <div class="tab" >



                <div class="col-sm-12">


                    @if($mensaje = \Illuminate\Support\Facades\Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>

                    @endif

                    <div class="col-sm-12">
                        @if($mensaje = \Illuminate\Support\Facades\Session::get('title'))
                        <div class="alert alert-danger" role="alert">
                            {{ $mensaje }}
                        </div>

                        @endif
                        <h3>Listado en el sistema</h3>
                        <!---->
                        <!---->
                        <!--            </div>-->
                        <!--            -->
                        <!--        </div>-->
                        <div class="head">

                            <div class="right">
                                <form action="{{route('items')}}" method="GET">
                                    <div class="btn-group">
                                        <input type="text" name="search" placeholder="Buscar..." class="form-control" value="">
                                        <button type="submit"class="btn btn-primary"><i class="bi bi-search"></i>
                                        </button>

                                </form>

                            </div>

                        </div>
                        <div class="left">
                            <a href="addC" class="btn btn-primary">
                                <span>Agregar</span>
                            </a>

                        </div>

                    </div>
                        <hr>

                        <p class="card-text">
                        <div class="table table-responsive">
                            <table id="table" class="table table-sm table-bordered">

                                <thead>
                                <th>Id</th>
                                <th>Categoria</th>
                                <th>Acciones</th>

                                </thead>

                                <tbody>
                                @foreach($items as $item)
                                <td>{{$item->id}}</td>
                                <td>{{$item->nombre}}</td>
                                <div class="inline">
                                <td>
                                    <div class="flex">
                                    <a href="{{route('modify',$item->id)}}" >
                                        <span>✏️</span>
                                    </a>  <form  id="myForm" action="{{ route('destroy', $item->id) }}" id="{{($item->id)}}">
                                        <a id="{{($item->id)}}" type="submit">
                                            <span>  🗑️</span>
                                        </a>
                                    </form>

                                        <script>
                                            document.addEventListener("DOMContentLoaded", function() {
                                                const form = document.getElementById("{{($item->id)}}").addEventListener("click", function(event) {
                                                    event.preventDefault();
                                                    Swal.fire({
                                                        title: "Estas seguro de eliminar?",
                                                        text: "No podras revertir esto!",
                                                        icon: "warning",
                                                        showCancelButton: true,
                                                        confirmButtonText: "Si, eliminalo!",
                                                        cancelButtonText: "No, cancelar!",
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {

                                                            document.getElementById("myForm").submit();
                                                        }
                                                    });
                                                });
                                            });
                                        </script>

                                    </div>
                                </td></div>
                                </tbody>
                                @endforeach

                                {{$items-> links()}}
                            </table>



                            <a href="list" class="btn btn-primary">
                                <span class="bi bi-arrow-return-left"></span>
                            </a>

                            <a  class="btn btn-primary" href="categorias">
                                <span class="bi bi-arrow-clockwise" ></span>
                            </a>

                        </div>



                        </p>

                    </div>
                </div>
            </div>


            @endsection


