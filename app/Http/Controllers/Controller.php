<?php

namespace App\Http\Controllers;

use App\Exports\ExportName;
use App\Models\Categoria;
use App\Models\Estado;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Libro;
use mysql_xdevapi\Exception;
use Excel;
use Termwind\Components\Li;


class Controller extends BaseController
{

    function prueba(){

        $items = Libro::all();
        return view('menu2', compact('items'));
    }



    function main(){
        return view('main');
    }
    function index()
    {

        $items = Libro::all();
        return view('list', compact('items'));
    }

    function indexl()
    {

        $items = Libro::orderBy('autor', 'asc')->paginate(5);
        return view('libros', compact('items','items'));

    }

    function list(){
        $items = Libro::all();
        $libros = Libro::all();
        return view('list', compact('items','libros'));
    }

    function public(){
        $libros = Libro::all();
        $items = Libro::all();
        return view('public', compact('items','libros'));
    }

    function indexg(){

        $items = Categoria::orderBy('nombre','asc')->paginate(5);
        return view('categorias',compact('items'));
    }



    function add()
    {
        $categoriaitem = Categoria::all();
        $estado=Estado::all();
        return view('add',compact('categoriaitem','estado'));
    }

    function store(Request $request)
    {
        try{
            $libro = new Libro();
            $libro->id = $request->input('id');
            $libro->nombre = $request->input('nombre');
            $libro->autor = $request->input('autor');
            $libro->categoria_id = $request->input('categoria_id');
            $libro->estado_id =$request->input('estado_id');
            $libro->descripcion = $request->input('descripcion');


            if($request->hasFile('img'))
            {
                $file=$request->file('img');
                $extention=$file->getClientOriginalExtension();
                $filename= time().'.'.$extention;
                $file->move('images',$filename);
                $libro->img=$filename;
            }
            else if ($libro->img == null){
                $libro->img="libro.jpg";
            }


            $libro->save();


        }
        catch (\Exception $exception){
            return redirect()->route("librosview")->with("title","Error: Ha creado un libro con el mismo codigo, este debe ser unico");
        }
        return redirect()->route("librosview")->with("success", "Agregado con exito!");

    }

    function storeC (Request $request)
    {
        try {
            $categoria = new Categoria();
            $categoria->id = $request->post('id');
            $categoria->nombre = $request->post('nombre');
            $categoria->save();
        }

        catch (\Exception $exception){
            return redirect()->route("categoriasview")->with("title","Error: Ha creado una categoria con el mismo codigo, este debe ser unico");
        }
        return redirect()->route("categoriasview")->with("success", "Agregado con exito!");

    }

    function addC()
    {
        return view('addC');
    }

    public function delete($id)
    {
        $libros = Libro::find($id);
        $libros->delete();
        return redirect()->route("librosview")->with("success","Eliminado con exito!");

    }

    public function deleteC($id)
    {
        try{
            $categorias = Categoria::find($id);
            $categorias->delete();}
        catch (\Exception $exception){
            return redirect()->route("categoriasview")->with("title","No se puede eliminar esta categoria debido a que ya esta en uso");
        }
        return redirect()->route("categoriasview")->with("success", "Eliminado con exito");

    }

    public function edit($id){
        $categoriaitem = Categoria::all();
        $item = Libro::find($id);
        $estado = Estado::all();
        return view('edit', compact('item', 'categoriaitem','estado'));
    }


    function update(Request $request, $id)
    {
        $item = Libro::find($id);
        $item->nombre = $request->post('nombre');
        $item->autor = $request->post('autor');
        $item->categoria_id = $request->post('categoria_id');
        $item->estado_id = $request->post('estado_id');
        $item->descripcion = $request->post('descripcion');
//        $item->img=$request->post('img');
        $item->save();
        return redirect()->route("librosview")->with("success", "Editado con exito!");

    }

    public function editc($id){
        $item = Categoria::find($id);
        return view('editc',compact('item'));
    }

    public function updatec(Request $request, $id){
        $item = Categoria::find($id);
        $item->nombre=$request->post('nombre');
        $item->save();
        return redirect()->route('categoriasview')->with("success", "Editado con exito!");
    }

    public function excel(){


        return Excel::download(new ExportName(), 'libros.xlsx');

    }


    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $items = Libro::where('nombre', 'like', '%' . $searchTerm . '%')
            ->paginate(5);

        return view('libros', ['items' => $items]);
    }

    public function buscar(Request $request)
    {
        $libros=Libro::all();
        $searchTerm = $request->input('search');

        $items = Libro::where('nombre', 'like', '%' . $searchTerm . '%')
            ->paginate(5);

        return view('list', ['items' => $items,'libros'=>$libros]);
    }

    public function buscarC(Request $request, $categoria)
    {
        $libros =Libro::all();
        $items = Libro::whereHas('categoria', function ($query) use ($categoria) {
            $query->where('nombre', 'like', '%' . $categoria . '%');
        })->paginate(5);

        return view('list', ['items' => $items, 'libros'=>$libros]);
    }

    public function buscarE(Request $request, $object)
    {
        $libros =Libro::all();
        $items =Libro::whereHas('estado',function ($query) use ($object){
            $query->where('nombre','like','%'.$object . '%');
        } ) ->paginate(5);

        return view('list',['items'=>$items,'libros'=>$libros]);
    }
    public function buscarA(Request $request, $object)
    {
        $libros=Libro::all();
        $items =Libro::where('autor','like','%'.$object.'%')
            ->paginate(5);

    return view('list',['items'=>$items,'libros'=>$libros]);
    }





}
