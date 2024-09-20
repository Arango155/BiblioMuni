<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Autor</th>
        <th>Categoria</th>
        <th>Fecha de Creación</th>
        <th>Fecha de Actualización</th>
    </tr>
    </thead>
</table>
<tbody>
@foreach($item as $object)
<tr>
    <td>{{$object->id}}</td>
    <td>{{$object->nombre}}</td>
    <td>{{$object->autor}}</td>
    <td>{{$object->categoria->nombre}}</td>
    <td>{{$object->created_at}}</td>
    <td>{{$object->updated_at}}</td>
</tr>
@endforeach
</tbody>
