<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Categoria</b>

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
                        <div class="card-header">Categoria

                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">User</th>
                                <th scope="col">Data de criação</th>
                                <th scope="col">Data de atualização</th>
                                <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--@php($i = 1)-->

                                @foreach($categories as $category)
                                <tr>
                                <th scope="row">{{$categories->firstItem() + $loop->index}}</th>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->user->name}}</td>
                                <td>{{Carbon\Carbon::parse($category->created_at)->diffForHumans()}}</td>
                                <td>
                                    @if($category->updated_at == NULL)
                                    <span class="text-danger">Sem dados</span>
                                    @else
                                    {{Carbon\Carbon::parse($category->updated_at)->diffForHumans()}}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{url('categoria/edit/'.$category->id)}}" class="btn btn-info">Editar</a>
                                    <a href="{{url('softdelete/category/'.$category->id)}}" class="btn btn-danger">Deletar</a>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$categories->links()}}
                     </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add Categoria</div>
                        <div class="card-body">
                            <form action="{{route('story.category')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Categoria:</label>
                                    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('category_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Adicionar categoria</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">

                        <div class="card-header">Lixeira

                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">User</th>
                                <th scope="col">Data de criação</th>
                                <th scope="col">Data de atualização</th>
                                <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--@php($i = 1)-->

                                @foreach($lixeiraCat as $category)
                                <tr>
                                <th scope="row">{{$lixeiraCat->firstItem() + $loop->index}}</th>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->user->name}}</td>
                                <td>{{Carbon\Carbon::parse($category->created_at)->diffForHumans()}}</td>
                                <td>
                                    @if($category->updated_at == NULL)
                                    <span class="text-danger">Sem dados</span>
                                    @else
                                    {{Carbon\Carbon::parse($category->updated_at)->diffForHumans()}}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{url('categoria/restore/'.$category->id)}}" class="btn btn-info">Restaurar</a>
                                    <a href="{{url('categoria/forcedelete/'.$category->id)}}" class="btn btn-danger">Deletar</a>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$lixeiraCat->links()}}
                     </div>
                </div>
                <div class="col-md-4">

                </div>

            </div>
        </div>

    </div>
</x-app-layout>
