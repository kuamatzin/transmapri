<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
    {!! Form::label('category', 'Categoría') !!}
    {!! Form::select('category', [1 => 'Bancos', 2 => 'Carros', 3 => 'Camillas', 4 => 'Chesse Longue', 5 => 'Escalerillas', 6 => 'Lámparas', 7 => 'Juegos de consultorio', 8 => 'Mesas', 9 => 'Negatoscopios', 9 => 'Portasueros', 10 => 'Muebles de acero inoxidable', 11 => 'Muebles Clave IMSS', 12 => 'Muebles sobre diseño'], null, ['id' => 'category', 'class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('category') }}</small>
</div>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>
<!--
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'Descripción') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('description') }}</small>
</div>
-->
<div class="form-group">
    <label for="exampleFormControlFile1">Imagen</label>
    @if(isset($product))
    <br>
    <img src="/storage/{{$product->image}}" alt="" class="img-fluid" width="50%">
    <br><br>
    @endif
    <input type="file" name="imageUpload" class="form-control-file" id="exampleFormControlFile1">
    <small class="text-danger">{{ $errors->first('image') }}</small>
</div>
<div class="btn-group pull-right">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>
