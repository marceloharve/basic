<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class CategoriaController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function todascategorias()
    {
        
        $categories = Categoria::latest()->paginate(5);
        $lixeiraCat = Categoria::onlyTrashed()->latest()->paginate(3);
        //$categories = DB::table('categorias')->latest()->paginate(5);
        return view('admin.categoria.index',compact('categories','lixeiraCat'));
    }

    public function addcat(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categorias|max:255',
        ],
        [
            'category_name.required' => 'Insira a categoria',
        ],
        [
            'category_name.max:255' => 'A categoria deve ter no máximo 255 caracteres',
        ],
        );

        //$category = new Categoria;
        //$category->category_name =  $request->category_name;
        //$category->user_id =  Auth::user()->id;
        //$category->save();

        Categoria::insert([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->back()->with('success','Categoria inserida com sucesso!');

    }

    public function edit($id)
    {
        $categories = Categoria::find($id);
        return view('admin.categoria.edit',compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $update = Categoria::find($id)->update(
            ['category_name' => $request->category_name,
            'user_id' => Auth::user()->id]
        );

        return Redirect()->route('categoria')->with('success','Categoria atualizada com sucesso!');
    }
    
    public function forcedelete($id)
    {
        $delete = Categoria::onlyTrashed()->find($id)->forceDelete();
        return Redirect()->back()->with('success','Categoria deletada permanentemente com sucesso!');
    }

    public function softdelete($id)
    {
        $delete = Categoria::find($id)->delete();
        return Redirect()->back()->with('success','Categoria deletada com sucesso!');
    }

    public function restore($id)
    {
        $delete = Categoria::withTrashed()->find($id)->restore();
        return Redirect()->back()->with('success','Categoria restaurada com sucesso!');
    }




}
