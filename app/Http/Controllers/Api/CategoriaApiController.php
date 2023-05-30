<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaApiController extends Controller
{
    //
    public function index()
    {
        $categorias = Categoria::latest()->get();
        return response()->json($categorias);
    }

    public function Inserir(Request $request)
    {
        $validateData = $request->validate([
            'category_name' => 'required|unique:categorias'
        ]);

        Categoria::insert([
            'category_name' => $request->category_name,
            'user_id' => $request->user_id,
        ]);

        return response('Categoria inserida com sucesso!');
    }

    public function Editar($id)
    {
        $categoria = Categoria::findOrFail($id);
        return response()->json($categoria);
    }

    public function Update(Request $request,$id)
    {
        $categoria = Categoria::findOrFail($id)->update(

            [
                'category_name' => $request->category_name, 
            ]
        );
        return response('Categoria atualizada!');
    }

    public function Delete($id)
    {
        Categoria::findOrFail($id)->delete();
        return response('Categoria deletada.');
    }

}
