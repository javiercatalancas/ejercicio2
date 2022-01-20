<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Creación del producto</h1>
    @if ($errors->any())
        {{-- <ul>
            @foreach ($errors->all() as $error){
                <li>{{ $error }}</li>
            @endforeach
        </ul> --}}
    
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form method="POST" action="{{ url('productos') }}">
{{-- ASIGNA UN TOKEN --}}
{{-- {{ csrf_field() }}   --}}
<div class="form-group">
    <label for="nombre_producto">Nombre Producto:</label>
    <input type="text" class="form-control" name="nombre_producto" id="nombre_producto" placeholder="introduce nombre de producto">
</div>

<div class="form-group">
    <label for="Descripción">Descripción</label>
    <textarea class="form-control" name="descripcion" id="descripción" maxlength="200"></textarea>
</div>
<div class="form-group">
    <label for="status">Status:</label>
    <select name="status">
        <option value="venta" selected>VENTA</option>
        <option value="stock">STOCK</option>
    </select>
</div>

<div class="form-group">
    
    <label for="activo">Activo</label>
    <input type="checkbox" class="form-control" name="activo" id="activo">
    
</div>

<div class="form-group">
    <label for="precio">Precio:</label>
    <input type="number" step="0.01" class="form-control" name="precio" id="precio" placeholder="introduce precio">
</div>

<div class="form-group">
    <label for="oferta_desde">Oferta desde:</label>
    <input type="date" class="form-control" name="oferta_desde" id="oferta_desde">
</div>

<div class="form-group">
    <label for="oferta_hasta">Oferta hasta:</label>
    <input type="date" class="form-control" name="oferta_hasta" id="oferta_hasta">
</div>

<div class="form-group">
    <label for="codigo_producto">Código producto</label>
    <input type="text" class="form-control" name="codigo_producto" id="codigo_producto">
</div>    

<button type="submit" class="btn btn-primary">Enviar Datos</button>
</form>
</body>
</html>