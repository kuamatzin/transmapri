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
                <li class="list-group-item text-center" style="background-color: rgb(48, 155, 50); color: white;">MOBILIARIO</li>
                <li class="list-group-item category {{ $category == 1 || $category == null ? 'c-active' : ''}}"><a href="/products?category=1">Bancos</a></li>
                <li class="list-group-item category {{ $category == 2 ? 'c-active' : ''}}"><a href="/products?category=2">Carros</a></li>
                <li class="list-group-item category {{ $category == 3 ? 'c-active' : ''}}"><a href="/products?category=3">Camillas</a></li>
                <li class="list-group-item category {{ $category == 4 ? 'c-active' : ''}}"><a href="/products?category=4">Chesse Longue</a></li>
                <li class="list-group-item category {{ $category == 5 ? 'c-active' : ''}}"><a href="/products?category=5">Escalerillas</a></li>
                <li class="list-group-item category {{ $category == 6 ? 'c-active' : ''}}"><a href="/products?category=6">Lámparas</a></li>
                <li class="list-group-item category {{ $category == 7 ? 'c-active' : ''}}"><a href="/products?category=7">Juegos de consultorio</a></li>
                <li class="list-group-item category {{ $category == 8 ? 'c-active' : ''}}"><a href="/products?category=8">Mesas</a></li>
                <li class="list-group-item category {{ $category == 9 ? 'c-active' : ''}}"><a href="/products?category=9">Negatoscopios</a></li>
                <li class="list-group-item category {{ $category == 10 ? 'c-active' : ''}}"><a href="/products?category=10">Portasueros</a></li>
                <li class="list-group-item category {{ $category == 11 ? 'c-active' : ''}}"><a href="/products?category=11">Muebles de acero inoxidable</a></li>
                <li class="list-group-item category {{ $category == 12 ? 'c-active' : ''}}"><a href="/products?category=12">Muebles Clave IMSS</a></li>
                <li class="list-group-item category {{ $category == 13 ? 'c-active' : ''}}"><a href="/products?category=13">Muebles sobre diseño</a></li>
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
                        <th>Eliminar</th>
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
                        <td>
                            {!! Form::open(['url' => 'products/' . $product->id, 'method' => 'DELETE']) !!}
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            {!! Form::close() !!}  
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
