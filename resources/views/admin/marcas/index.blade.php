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
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session('success')}}</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @endif
                        <div class="card-header">Marcas

                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Imagem</th>
                                <th scope="col">Data de criação</th>
                                <th scope="col">Data de atualização</th>
                                <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--@php($i = 1)-->

                                @foreach($marcas as $marca)
                                <tr>
                                <th scope="row">{{$marcas->firstItem() + $loop->index}}</th>
                                <td>{{$marca->brand_name}}</td>
                                <td><img src="{{asset($marca->brand_image)}}" style="height:40px;width:70px;" ></td>
                                <td>{{Carbon\Carbon::parse($marca->created_at)->diffForHumans()}}</td>
                                <td>
                                    @if($marca->updated_at == NULL)
                                    <span class="text-danger">Sem dados</span>
                                    @else
                                    {{Carbon\Carbon::parse($marca->updated_at)->diffForHumans()}}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{url('marcas/edit/'.$marca->id)}}" class="btn btn-info">Editar</a>
                                    <a href="{{url('marcas/forcedelete/'.$marca->id)}}" class="btn btn-danger">Deletar</a>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$marcas->links()}}
                     </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add Marcas</div>
                        <div class="card-body">
                            <form action="{{route('story.brand')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Marca:</label>
                                    <input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('brand_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Imagem:</label>
                                    <input type="file" name="brand_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('brand_image')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Adicionar marca</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>
</x-app-layout>
