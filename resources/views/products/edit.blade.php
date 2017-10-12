@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$product->name}}</h4>
                    {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include('products.form', ['submitButtonText' => 'Guardar'])
                    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection