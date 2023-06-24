<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden</title>
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
            <div>
                <div class="d-flex justify-content-between">
                    <div style="width: 50%;">
                        <form action="{{route('orden.guardar')}}" method="POST" class="mr-3">
                            @csrf

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Estado de orden</label>
                                <input type="text" class="form-control" name="referencia_orden">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Direccion de entrega</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp" name="direccion">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Cantidad</label>
                                <input type="text" class="form-control" name="cantidad">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precio">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Id Cliente</label>
                                <input type="text" class="form-control" name="cliente_id">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">producto</label>
                                <input type="text" class="form-control" name="producto">
                            </div>
                            
                            <center>
                                <button type="submit" class="btn btn-primary" style="color: black;">Submit</button>
                            </center>
                        </form>
                    </div>
                    
                    
                    <div style="width: 50%;">
                        <table class="table">
                            <thead class="table-dark">
                                <th scope="col">id_cliente</th>
                                <th scope="col">nombre</th>
                                <th scope="col">correo</th>
                                
                            </thead>
                            @foreach($user as $us)
                            <tbody>
                                <td>
                                    {{$us->id}}
                                </td>
                                <td>
                                    {{$us->name}}
                                </td>
                                <td>
                                    {{$us->email}}
                                </td>  
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            </center>
    </x-slot>
    
    <table class="table">
        <thead class="table-dark">
            <th scope="col">id</th>
            <th scope="col">Estado de orden</th>
            <th scope="col">Direccion de entrega</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Id Cliente</th>
            <th scope="col">producto</th>
        </thead>
        @foreach($orden as $orde)
        <tbody>
            
            <td>
                {{$orde->id_orden}}
            </td>
            <td>
                {{$orde->referencia_orden}}
            </td>
            <td>
                {{$orde->direccion}}
            </td>
            <td>
                {{$orde->cantidad}}
            </td>
            <td>
                {{$orde->precio}}
            </td>
            <td>
                {{$orde->cliente_id}}
            </td>
            <td>
                {{$orde->producto}}
            </td>
            <td>
                <form action="{{ route('orden.delete', $orde->id_orden) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary" style="color: black;">Eliminar</button>
                    <a href="{{route('orden.editar', $orde->id_orden)}}" class="btn btn-success mx-2">Editar</a>
                </form>
            </td>
            
            
        </tbody>
        @endforeach
    </table>
    
            
</x-app-layout>

</html>
