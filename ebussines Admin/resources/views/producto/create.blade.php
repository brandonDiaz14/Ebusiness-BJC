<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>WEB DINAMICA</title>
</head>
<x-app-layout>
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Hola Bienvenido') }}
            </h2>
    </x-slot>
    
    
    crear Producto

<div>
    <form action="{{route('producto.guardar')}}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nombre</label>
            <input type="text" class="form-control"   name="Nom_produ">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipo de Producto</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp"  name="Tipo_produ">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Cantidad</label>
            <input type="text" class="form-control"   name="cant_produ">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Precio</label>
            <input type="text" class="form-control"    name="precio">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Categoria</label>
            <input type="text" class="form-control"   name="categoria_id_categoria">
        </div>
        <center>
            <button type="submit" class="btn btn-primary" style="color: black;">Submit</button>
        </center>
        
    </form>
</div>
            
</x-app-layout>

</html>