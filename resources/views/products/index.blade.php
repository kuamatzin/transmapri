@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1>Productos</h1>
    <br>
    @include('flash::message')
    <br>
    <a href="/products/create" class="btn btn-success pull-right" style="color: white">Agregar producto</a>
    <br>
    <div class="row mt-5">
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item text-center" style="background-color: rgb(48, 155, 50); color: white;">CATEGORÍAS</li>
                <li class="list-group-item category {{ $category == 1 || $category == null ? 'c-active' : ''}}"><a href="/products?category=1">Carros</a></li>
                <li class="list-group-item category {{ $category == 2 ? 'c-active' : ''}}"><a href="/products?category=2">Cabinas</a></li>
                <li class="list-group-item category {{ $category == 3 ? 'c-active' : ''}}"><a href="/products?category=3">Muebles</a></li>
                <li class="list-group-item category {{ $category == 4 ? 'c-active' : ''}}"><a href="/products?category=4">Camillas</a></li>
            </ul>
        </div>
        <div class="col-md-9">
            <table class="table">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $product)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <img src="/storage/{{$product->image}}" alt="" class="img-fluid">
                        </td>
                        <td>
                            <a href="/products/{{$product->id}}/edit" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection