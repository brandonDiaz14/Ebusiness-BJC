<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Crud</title>
</head>
<x-app-layout>
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Hola Bienvenido') }}
            </h2>
            <center>
                <a href="{{route('producto.create')}}"><button type="submit" class="btn btn-primary" style="color: black;">Crear Producto</button></a>
            </center>
    </x-slot>
    
    <table class="table">
        <thead class="table-dark">
            <th scope="col">id</th>
            <th scope="col">Nombre de producto</th>
            <th scope="col">Tipo de producto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Id Categoria</th>
        </thead>
        @foreach($producto as $produ)
        <tbody>
            
            <td>
                {{$produ->id_produ}}
            </td>
            <td>
                {{$produ->Nom_produ}}
            </td>
            <td>
                {{$produ->Tipo_produ}}
            </td>
            <td>
                {{$produ->cant_produ}}
            </td>
            <td>
                {{$produ->precio}}
            </td>
            <td>
                {{$produ->categoria_id_categoria}}
            </td>
            <td>
                <form action="{{ route('producto.delete', $produ->id_produ) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary" style="color: black;">Eliminar</button>
                    <a href="{{route('producto.editar', $produ -> id_produ)}}" class="btn btn-success mx-2">Editar</a>
                </form>
            </td>
            
            
        </tbody>
        @endforeach
    </table>
    
            
</x-app-layout>

</html>
