<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Marcas</b>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Update Marca</div>
                        <div class="card-body">
                            <form action="{{url('marcas/update/'.$brand->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_image" value="{{$brand->brand_image}}">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Marca:</label>
                                    <input type="text" name="brand_name" value="{{$brand->brand_name}}" class="form-control" id="exampleInputbrand_name" aria-describedby="emailHelp">
                                    @error('brand_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Imagem:</label>
                                    <input type="file" name="brand_image" value="{{$brand->brand_image}}" class="form-control" id="exampleInputbrand_image" aria-describedby="emailHelp">
                                    @error('brand_image')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <img src="{{asset($brand->brand_image)}}" style="height:40px;width:70px;" >
                                </div>

                                <button type="submit" class="btn btn-primary">Atualizar categoria</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
