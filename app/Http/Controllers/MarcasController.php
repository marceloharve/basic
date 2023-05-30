<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marcas;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Image;


class MarcasController extends Controller
{
    public function todasmarcas()
    {
        
        $marcas = Marcas::latest()->paginate(5);
        //$categories = DB::table('categorias')->latest()->paginate(5);
        return view('admin.marcas.index',compact('marcas'));
    }

    public function logout()
    {
        Auth::logout();
        return Redirect()->route('login')->with('sucess','Usuário logout');
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'brand_name' => 'required|unique:marcas|max:255',
            'brand_image' => 'required|mimes:jpg,jpeg,png'
        ],
        [
            'brand_name.required' => 'Insira a marca',
        ],
        
        );

        $brand_image = $request->file('brand_image');

        //$name_gen = hexdec(uniqid());
        //$img_ext = strtolower($brand_image->getClientOriginalExtension());
        //$img_name = $name_gen.'.'.$img_ext;
        //$up_location = 'image/marcas';
        //$last_img = $up_location.'/'.$img_name;
        //$brand_image->move($up_location,$img_name);

        $name_gen = hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
        Image::make($brand_image)->resize(300,200)->save('image/marcas'.$name_gen);

        $last_img = 'image/marcas'.$name_gen;

        $brand = new Marcas;
        $brand->brand_name =  $request->brand_name;
        $brand->brand_image = $last_img;
        $brand->save();



        return Redirect()->back()->with('success','Marca inserida com sucesso!');

    }

    public function edit($id)
    {
        $brand = Marcas::find($id);
        return view('admin.marcas.edit',compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'brand_name' => 'required|max:255'
        ],
        [
            'brand_name.required' => 'Insira a marca',
        ],
        
        );
        $old_image = $request->old_image;
        $brand_image = $request->file('brand_image');

        if($brand_image)
        {
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($brand_image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/marcas';
            $last_img = $up_location.'/'.$img_name;
            $brand_image->move($up_location,$img_name);
            unlink($old_image);
            
    
            $brand = Marcas::find($id);
            $brand->brand_name =  $request->brand_name;
            $brand->brand_image = $last_img;
            $brand->save();
        }
        else{
            $brand = Marcas::find($id);
            $brand->brand_name =  $request->brand_name;
            $brand->save();
        }
        return Redirect()->route('marcas')->with('success','Marca atualizada com sucesso!');

    }
    
    public function forcedelete($id)
    {
        $delete = Marcas::find($id)->delete();
        return Redirect()->back()->with('success','Marcas deletada permanentemente com sucesso!');
    }

}
