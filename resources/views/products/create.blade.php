@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['url' => 'products', 'files' => true]) !!}
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