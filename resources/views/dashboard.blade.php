<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Olá, <b>{{Auth::user()->name}}</b>
            <b style="float:right;">Total
                <span class="badge bg-danger tips">{{count($users)}}</span>
            </b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Data de criação</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach($users as $usuario)
                    <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->created_at->diffForHumans()}}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
