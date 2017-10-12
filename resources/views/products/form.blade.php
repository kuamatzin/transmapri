<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
    {!! Form::label('category', 'Categoría') !!}
    {!! Form::select('category', [1 => 'Carros', 2 => 'Cabinas', 3 => 'Muebles', 4 => 'Camillas'], null, ['id' => 'category', 'class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('category') }}</small>
</div>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'Descripción') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('description') }}</small>
</div>
<div class="form-group">
    <label for="exampleFormControlFile1">Imagen</label>
    @if(isset($product))
    <br>
    <img src="/{{$product->image}}" alt="" class="img-fluid" width="50%">
    <br><br>
    @endif
    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
</div>
<div class="btn-group pull-right">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>